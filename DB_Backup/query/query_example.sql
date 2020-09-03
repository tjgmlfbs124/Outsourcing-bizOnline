

### 데이터 타입 변경 ###
ALTER TABLE mobile_plan MODIFY COLUMN `call` varchar(45) NOT NULL;

### 데이터 업데이트 ###
UPDATE mobile_plan 
SET `data`="200GB"
WHERE `_id`=2;

### 원격 접속 권한 추가 ###
CREATE USER '아이디'@'허용주소(ex)192.168.%' IDENTIFIED BY PASSWORD '비밀번호';
GRANT 권한 ON 디비.테이블 TO '아이디'@'허용주소';
# GRANT ALL ON *.* TO 'root'@'localhost';
FLUSH PRIVILEGES;

### 쿼리문 변수
SET @var = 1;

### 테이블 컬럼 추가 ###
ALTER TABLE `device_image`
ADD COLUMN `carrier_id` INT UNSIGNED,
ADD CONSTRAINT `fk_device_image_mobile_carrier1_idx` FOREIGN KEY (`carrier_id`)
REFERENCES `mobile_carrier`(`_id`);

### 포린키 설정된 컬럼의 값 수정
SET foreign_key_checks = 0;
UPDATE device_image
SET carrier_id=0
WHERE carrier_id IS NULL;
SET foreign_key_checks = 1;