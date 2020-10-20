

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

###
ALTER TABLE `device`
ADD COLUMN `release` DATE NOT NULL;


### 포린키 설정된 컬럼의 값 수정
SET foreign_key_checks = 0;
UPDATE device_image
SET carrier_id=0
WHERE carrier_id IS NULL;
SET foreign_key_checks = 1;


### 특정 제조사 디바이스 이름, 용량 조회
SELECT S.*, D.name
FROM device_storage S, device D
WHERE D._id = S.device_id AND D.manufacturer_id = 2

SELECT D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(DISTINCT C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
  FROM device D, device_storage S, device_image C
  WHERE S.device_id = 21
  AND C.device_id = 21
  AND D._id = 21
  GROUP BY D._id;

### 제약조건 조회
SELECT *
FROM information_schema.table_constraints

SHOW CREATE TABLE {`table_name`};

### 특정DB(biz_online)의 제약조건 조회
SELECT *
FROM information_schema.table_constraints TB
WHERE TB.TABLE_SCHEMA = "biz_online";

### 제약조건 삭제/추가 ###
ALTER TABLE `{FK_table_name}`
DROP FOREIGN KEY `{fk_constraint_name}`;

ALTER TABLE `device_image`
ADD CONSTRAINT `fk_device_image_mobile_carrier1_idx`
FOREIGN KEY (`carrier_id`) REFERENCES `mobile_carrier`(`_id`)
ON UPDATE CASCADE;
/* EX 2*/
ALTER TABLE `support_fund`
DROP FOREIGN KEY `fk_support_fund_device1`;

ALTER TABLE `mobile_plan`
ADD CONSTRAINT `fk_support_fund_device2`
FOREIGN KEY(`device_id`) REFERENCES `device`(`_id`)
ON DELETE CASCADE
ON UPDATE CASCADE;

### 컬럼 타입 변경
ALTER TABLE `consultation_request`
MODIFY `estimate_id` INT(10) UNSIGNED;

### 컬럼 추가
ALTER TABLE `consultation_request`
ADD `estimate_id` INT(10) UNSIGNED

### 테이블 생성 쿼리조회
SHOW CREATE TABLE `{table_name}`

### 테이블에 정의되어있는 key 가 연결되어있는 정보
SHOW INDEXES IN `{table_name}`

ALTER TABLE `user`
ADD CONSTRAINT `fk_user_manager_idx`
FOREIGN KEY (`recommender`) REFERENCES `manager`(`code`)
ON UPDATE CASCADE;

### 테이블 만들기 ###
CREATE TABLE `installment`
(
  `_id` INT PRIMARY KEY AUTO_INCREMENT,
  `month` INT NOT NULL
);

### 테이블 만들기+제약조건
CREATE TABLE `device_mobile_category`
(
  `_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `device_id` INT UNSIGNED NOT NULL,
  `category_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`_id`),
  CONSTRAINT `fk_device_mobile_catoery_deivce1`
    FOREIGN KEY (`device_id`)
    REFERENCES `biz_online`.`device`(`_id`)
    ON UPDATE CASCADE ,
  CONSTRAINT `fk_device_mobile_category_mobile_plan_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `biz_online`.`mobile_plan_category`(`_id`)
    ON UPDATE CASCADE
);

### 요금제 삭제
DELETE FROM mobile_plan
WHERE _id = 132;

### 테이블 비교 (같은 값 가진 데이터)
SELECT A.*, B.*
FROM device_mobile_category A, device_mobile_category B
WHERE A.device_id = B.device_id
AND A.category_id = B.category_id
AND A._id <> B._id; #다름 (!=)


#######################################################
SELECT d.dname
FROM emp e INNER JOIN dept d ON e.deptno = d.deptno
WHERE e.ename = "JONES";
