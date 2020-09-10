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

### 디바이스 목록 +저장소 ###
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage
FROM device D, device_storage S
WHERE S.device_id = D._id
GROUP BY D._id;

### 특정 제조사 디바이스 목록+용량(manufacturer._id)
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as
storage, D.release
FROM device D, device_storage S
WHERE S.device_id = D._id AND D.manufacturer_id = %{manufacturer._id}
GROUP BY D._id;

### 디바이스 목록+용량+출시일 최근 출시 순 ###
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.release
FROM device D, device_storage S
WHERE S.device_id = D._id
GROUP BY D._id
ORDER BY D.release DESC;

### 디바이스, 색상 리스트
SELECT D._id, D.name, GROUP_CONCAT(C.name SEPARATOR ',') as colors
FROM device D, device_image C
WHERE C.device_id = D._id
GROUP BY D._id;

### 특정 디바이스 상세 조회 (device._id)
SELECT D.*, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(DISTINCT C._id,":",C.name,":",C.image_url,":",C.color) as color
FROM device D, device_storage S, device_image C
WHERE S.device_id = %{device._id}
AND C.device_id = %{device._id}
AND D._ID = %{device._id}
GROUP BY D._id;
/*용량및 색상 결과값 ex>
용량>(128G:990000,256G:1200000)
색상>(11:화이트:A1110_white.jpg:ffffff, 12:블랙:A1110_black.jpg:000000)
*/

### 특정 디바이스, 통신사 포함 상세 조회 (device._id, mobile_carrier._id)
SELECT D._id, D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
FROM device D, device_storage S, device_image C
WHERE S.device_id = %{device._id}
AND C.device_id = %{device._id}
AND (C.carrier_id = %{mobile_carrier.id} OR C.carrier_id = 0)
GROUP BY D._id;

### 특정 통신사 요금제 조회 (mobile_carrier)
SELECT *
FROM mobile_plan Plan
WHERE Plan.category_id =
    ANY(SELECT _id
    FROM mobile_plan_category
    WHERE mobile_carrier_id = 1);

### 특정 통신사 특정 카테고리 요금제 조회(mobile_carrier, mobile_plan_category.name)
SELECT *
FROM mobile_plan Plan
WHERE Plan.category_id =
    (SELECT _id
    FROM mobile_plan_category
    WHERE mobile_carrier_id = 1 AND name="5G");
