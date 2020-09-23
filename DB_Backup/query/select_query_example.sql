//note
### 요금제 조회
SELECT C.name as c_name, P.*, PC.name as cat_name
FROM mobile_carrier C, mobile_plan P, mobile_plan_category PC
WHERE C._id = (
	SELECT mobile_carrier_id 
	FROM mobile_plan_category 
	WHERE _id = P.category_id)
AND PC._id = P.category_id;

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
/* EX 1 = 삼성전자*/
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as
storage, D.release
FROM device D, device_storage S
WHERE S.device_id = D._id AND D.manufacturer_id = 1
GROUP BY D._id;

### 제조사 이름으로 디바이스 조회(str{제조사})
SELECT `_id`, `name` 
FROM device 
WHERE manufacturer_id=(
    SELECT `_id` 
    FROM manufacturer 
    WHERE `name`="{제조사}"
);
/* EX */
SELECT `_id`, `name` 
FROM device 
WHERE manufacturer_id=(
    SELECT `_id` 
    FROM manufacturer 
    WHERE `name`="LG전자"
);

### 디바이스 목록+색상 ###
SELECT D._id, D.name, GROUP_CONCAT(C.name SEPARATOR ',') as color
FROM device D
 LEFT JOIN device_image C ON D._id = C.device_id
GROUP BY D._id;

### 특정 제조사 디바이스 목록+용량+최근 출시순(manufacturer_id)
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.release
FROM device D, device_storage S
WHERE S.device_id = D._id
 AND D.manufacturer_id = %{manufacturer_id}
GROUP BY D._id
ORDER BY D.release DESC;
/* EX */
SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.release
FROM device D, device_storage S
WHERE S.device_id = D._id
 AND D.manufacturer_id = 1
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

### 특정 디바이스, 통신사 색상 포함 조회 (device._id, mobile_carrier._id)
SELECT D._id, D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
FROM device D, device_storage S, device_image C
WHERE S.device_id = %{device._id}
AND C.device_id = %{device._id}
ANd D._id = %{device_id}
AND (C.carrier_id = %{mobile_carrier.id} OR C.carrier_id = 4)
GROUP BY D._id;
/* EX */
SELECT D._id, D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
FROM device D, device_storage S, device_image C
WHERE S.device_id = 2
AND C.device_id = 2
ANd D._id = 2
AND (C.carrier_id = 1 OR C.carrier_id = 4)
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
    WHERE `mobile_carrier_id` = %{mobile_carrier} 
			AND `name`="%{mobile_plan_category.name}");
/*EX*/
SELECT * 
FROM mobile_plan Plan
WHERE Plan.category_id = 
    (SELECT _id
    FROM mobile_plan_category
    WHERE `mobile_carrier_id` = 1 
		AND `name`="5G");


### 특정 디바이스의 특정 요금제 카테고리 조회(device_id, mobile_category_id)
SELECT P.*
FROM mobile_plan P, device_mobile_category M
WHERE M.device_id = %{device_id}
	AND M.category_id = %{category_id}
	AND P.category_id = M.category_id;
/*EX (1번디바이스의 1번카테고리(KT.5G))*/
SELECT P.*
FROM mobile_plan P, device_mobile_category M
WHERE M.device_id = 1
	AND M.category_id = 4
	AND P.category_id = M.category_id;


### 통신사의 요금제 카테고리 번호(mobile_carrier.id)
SELECT PC._id
FROM mobile_carrier C, mobile_plan_category PC
WHERE PC.mobile_carrier_id = C._id
	AND C._id = %{mobile_carrier.id};
/*EX(1번 통신사{KT}의 요금제 카테고리 번호)*/
SELECT PC._id
FROM mobile_carrier C, mobile_plan_category PC
WHERE PC.mobile_carrier_id = C._id
	AND C._id = 1;


### 특정 디바스의 특정 통신사 요금제 조회+요금제종류(device_id, mobile_carrier_id)
SELECT P.*, PC.name as c_name
FROM mobile_plan_category PC mobile_plan P 
	LEFT JOIN device_mobile_category M on P.category_id = M.category_id
WHERE M.device_id = %{device_id}
AND M.category_id = 
	ANY(SELECT _id
	FROM mobile_plan_category
	WHERE mobile_carrier_id = %{mobile_carrier_id});
/* EX (1번디바이스의 1번 통신사) */
SELECT P.*, PC.name as c_name
FROM mobile_plan_category PC, mobile_plan P
	LEFT JOIN device_mobile_category M on P.category_id = M.category_id
WHERE M.device_id = 1
AND M.category_id = 
	ANY(SELECT _id
	FROM mobile_plan_category
	WHERE mobile_carrier_id = 1)
AND P.category_id = PC._id;

### 특정 디바이스의 특정 통신사 요금제 카테고리 조회(device_id, mobile_carrier_id)
/*21번 디바이스의 1번 통신사(KT)의 사용가능한 요금제*/
SELECT PC._id, PC.name
FROM device_mobile_category M, mobile_plan_category PC
WHERE M.device_id = 21
	AND M.category_id = PC._id
	AND PC.mobile_carrier_id = 1;

### 특정 요금카테고리의 요금제 조회(mobile_plan_category.id)
SELECT P.*
FROM mobile_plan P
WHERE P.category_id = %{mobile_plan_category.id};
/*5번 카테고리(KT.LTE)*/
SELECT P.*
FROM mobile_plan P
WHERE P.category_id = 5;

### 모든 통신사, 요금제카테고리 출력
SELECT Car.name as Carrier, Cat.name as Category
FROM mobile_carrier Car, mobile_plan_category Cat
WHERE Cat.mobile_carrier_id = Car._id;

### 특정 디바이스의 출시한 통신사 조회(device_id)
SELECT CAR.name
FROM mobile_carrier CAR, device_mobile_category DCAT, mobile_plan_category CAT
WHERE DCAT.device_id = %{device_id}
	AND CAR._id = CAT.mobile_carrier_id
	AND DCAT.category_id = CAT._id;

### 각각 _id 에 맞는 결과값 리턴
SELECT 
	De._id as Device_id,
	De.name as Device_name,
	De.model as Device_model,
	De.image_url as Device_img,
	De.spec_display as Device_display,
	De.spec_cam as Device_cam,
	De.spec_cpu as Device_cpu,
	De.spec_size as Device_size,
	De.manufacturer_id as Device_manu,
	De.release as Device_release,
	Ca._id as Carrier_id,
	Ca.name as Carrier_name,
	Sto._id as Storage_id,
	Sto.storage as Storage_value,
	Sto.price as Storage_price,
	Img._id as Image_id,
	Img.name as Image_name,
	Img.image_url as Image_url,
	Pl._id as Plan_id,
	Pl.name as Plan_name,
	Pl.price as Plan_price,
	Pl.data as Plan_data,
	Pl.call as Plan_call,
	Pl.message as Plan_message
FROM device De, mobile_carrier Ca ,device_storage Sto, device_image Img, mobile_plan Pl
WHERE De._id=1
	AND Ca._id=1
	AND Sto._id=1
	AND Img._id=1
	AND Pl._id=1;


### 모든 보조금 리스트 출력, +디바이스이름 +요금제이름 +디바이스 순
SELECT F._id as id, F.device_id as device_id, D.name as device_name, F.mobile_plan_id as plan_id, P.name as plan_name, F.fund, F.additional_fund
FROM support_fund F, Device D, mobile_plan P
WHERE F.device_id=D._id
	AND F.mobile_plan_id=P._id
	ORDER BY device_id;

### 모든 보조금리스트 출력+ (요금제 카테고리 id)
SELECT F._id as id, F.device_id as device_id, D.name as device_name, F.mobile_plan_id as plan_id, P.name as plan_name, F.fund, F.additional_fund
FROM support_fund F, Device D, mobile_plan P
WHERE F.device_id=D._id
	AND F.mobile_plan_id=P._id
	AND P.category_id = ${category_id}
	ORDER BY device_id;
/*ex*/
SELECT F._id as id, F.device_id as device_id, D.name as device_name, F.mobile_plan_id as plan_id, P.name as plan_name, F.fund, F.additional_fund
FROM support_fund F, Device D, mobile_plan P
WHERE F.device_id=D._id
	AND F.mobile_plan_id=P._id
	AND P.category_id = 4
	ORDER BY device_id;

### 모든 공시지원금 출력
SELECT F._id as id, F.device_id as device_id, D.name as device_name, F.mobile_plan_id as plan_id, P.name as plan_name, F.fund, F.additional_fund
FROM support_fund F, Device D, mobile_plan P
WHERE F.device_id=D._id
	AND F.mobile_plan_id=P._id
	ORDER BY device_id;
### 모든 추가지원금 출력
