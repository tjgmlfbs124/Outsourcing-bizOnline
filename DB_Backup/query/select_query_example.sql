### 요금제 조회
SELECT C.name as c_name, P.* 
FROM mobile_carrier C, mobile_plan P
WHERE C._id = (
	SELECT mobile_carrier_id 
	FROM mobile_plan_category 
	WHERE _id = P.category_id);

### 참고 SELECT 쿼리 문 >> 
SELECT _id FROM mobile_plan_category 
WHERE name = "5G" AND mobile_carrier_id = ( 
	SELECT _id FROM mobile_carrier WHERE name="SKT"
);

### 요금제 조회 (통신사 추가) ###
# 컬럼 이름이 name 으로 같아서 as 로 별칭 사용
SELECT C.name as c_name, P.* 
FROM mobile_carrier C, mobile_plan P
WHERE C._id = (
	SELECT mobile_carrier_id 
	FROM mobile_plan_category 
	WHERE _id = P.category_id);

### 디바이스 조회 (제조사 지정)
SELECT M.name as m_name, D.*
FROM manufacturer M, device D
WHERE M._id = D.manufacturer_id;

### 디바이스 목록 조회+용량 ###
SELECT D._id, D.name, S.storage
FROM device D, device_storage S
WHERE S.device_id = D._id;

### 특정(_id)디바이스 +용량+색상 조회 ###
SELECT D._id, D.name, S.storage, C.name as cName
FROM device D, device_storage S, device_image C
WHERE S.device_id = D._id
AND D._id = 2
AND C.device_id = D._id;

### 디바이스+색상 조회 ###
SELECT D._id, D.name, C.name
FROM device D, device_image C
WHERE C.device_id = D._id;

### 디바이스, 저장소 리스트
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage
FROM device D, device_storage S
WHERE S.device_id = D._id
GROUP BY D._id;

### 디바이스, 색상 리스트
SELECT D._id, D.name, GROUP_CONCAT(C.name SEPARATOR ',') as colors
FROM device D, device_image C
WHERE C.device_id = D._id
GROUP BY D._id;

### 특정 디바이스 상세 조회 (device._id)
SELECT D._id, D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color) as color
FROM device D, device_storage S, device_image C
WHERE S.device_id = %{device._id}
AND C.device_id = %{device._id}
GROUP BY D._id;

### 특정 디바이스, 통신사 포함 상세 조회 (device._id, mobile_carrier._id)
SELECT D._id, D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
FROM device D, device_storage S, device_image C
WHERE S.device_id = %{device._id}
AND C.device_id = %{device._id}
AND (C.carrier_id = %{mobile_carrier.id} OR C.carrier_id = 0)
GROUP BY D._id;

