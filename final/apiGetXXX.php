<?php

// connect to database
if(!mysql_connect("localhost","root","1234")) {
  die('error');
}
// select the "netart" database
 mysql_select_db("netart");

// insert mode
if(!empty($_GET['lat'])){
  $sql2 = "SELECT * FROM data WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
  $result2 = mysql_query($sql2);
  $row2 = mysql_fetch_array($result2, MYSQL_NUM);
  // if there are no data match lat & lng, insert the data
  if(!($row2[0]>0))
  {
    $sql = "INSERT INTO `data`(`lat`, `lng`, `hashtag`, `type`, `tag1`) VALUES ( '{$_GET['lat']}' , '{$_GET['lng']}', '{$_GET['tag']}', '{$_GET['type']}', '{$_GET['fea']}')";
    mysql_query($sql);
  }
  // if matched, plus 1 numbers for 
  else
  {
    $sqlupdate = "UPDATE `data` SET `numbers` = $row2[4]+1 WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
    mysql_query($sqlupdate);

    if(!empty($_GET['fea']) AND $row2[6]<5){
      $sqlupdate = "UPDATE `data` SET `hashtags_num` = $row2[6]+1 WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
      $row2[6] += 1;
      mysql_query($sqlupdate);

      if($row2[6]==2){
        $sqlupdate = "UPDATE `data` SET `tag2` = '{$_GET['fea']}' WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
        mysql_query($sqlupdate);
      }
      if($row2[6]==3){
        $sqlupdate = "UPDATE `data` SET `tag3` = '{$_GET['fea']}' WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
        mysql_query($sqlupdate);
      }
      if($row2[6]==4){
        $sqlupdate = "UPDATE `data` SET `tag4` = '{$_GET['fea']}' WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
        mysql_query($sqlupdate);
      }
      if($row2[6]==5){
        $sqlupdate = "UPDATE `data` SET `tag5` = '{$_GET['fea']}' WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
        mysql_query($sqlupdate);
      }
    }
    elseif(!empty($_GET['fea']) AND $row2[6]==5){
      // echo($row2[9]);
      $sqlupdate = "UPDATE `data` SET `tag1` = '$row2[8]', `tag2` = '$row2[9]', `tag3` = '$row2[10]', `tag4` = '$row2[11]', `tag5` = '{$_GET['fea']}' WHERE lat = '{$_GET['lat']}' AND lng = '{$_GET['lng']}'";
      mysql_query($sqlupdate);
    }
  }

}


// if(!($row2[0]>0) AND !empty($_GET['lat']))
// {
//   $sql = "INSERT INTO `data`(`lat`, `lng`, `hashtag`, `type`) VALUES ( '{$_GET['lat']}' , '{$_GET['lng']}', '{$_GET['tag']}', '{$_GET['type']}')";
//   mysql_query($sql);
// }

// if (!empty($_GET['lat'])){
//   $sql = "INSERT INTO `data`(`lat`, `lng`, `hashtag`, `type`) VALUES ( '{$_GET['lat']}' , '{$_GET['lng']}', '{$_GET['tag']}', '{$_GET['type']}')";
//   mysql_query($sql);
// }



// decade 1 numbers per hour
$sqlupdate = "UPDATE `data` SET `numbers` = numbers-1 WHERE created_at <= date_sub(NOW(), interval 1 hour) AND numbers >= 1";
mysql_query($sqlupdate);
// delete data where numbers is 0
$sqldelete = "DELETE FROM `data` WHERE numbers = 0";
mysql_query($sqldelete);
// }


$sql = 'select * from data';

//test = 選取資料表
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
  // print_r($row);
  // die('');
  // echo "-----------------------------";
  // echo "{$row[1]},{$row[2]},{$row[3]},{$row[4]},{$row[5]}\n";
  echo "{$row[1]},{$row[2]},{$row[3]},{$row[4]},{$row[5]},{$row[6]},{$row[7]},{$row[8]},{$row[9]},{$row[10]},{$row[11]}\n";
}


?>