use index.php
use MySql database = 'netart', table = 'data'

all char is utf8

id(int) lat(double) lng(double) type(int) numbers(int) hashtag(char len = 128) hashtags_num(int, up to 5)

tag1(char len = 128) tag2(char len = 128) tag3(char len = 128) tag4(char len = 128) tag5(char len = 128)

created_at(timestamp, update when UPDATE or INSERT)