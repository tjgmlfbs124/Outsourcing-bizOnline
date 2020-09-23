### 특정 디바이스 스펙 변경 ###
UPDATE `biz_online`.`device` 
SET `spec_size` = '161.6 x 75.2 x 8.3 mm / 192g' 
WHERE (`_id` = '2');

### 특정 디바이스 전체 스펙 변경(device._id) ===
BEGIN;
UPDATE `device`
SET `name`="갤럭시 폴드", 
`model`="SM-F907N",
`image_url`="",
`spec_display`="메인 : 185.1mm(7.3″) 4.2:3 QXGA+Dynamic AMOLED / 커버 : 116.2mm(4.6″) 21:9 HD+Dynamic AMOLED",
`spec_cam`="후면 : 초광각 16MP+ 광각 :12MP + 망원 : 12MP / 전면 : 메인 - 듀얼카메라 10MP,8MP + 커버 - 싱글카메라
 10MP",
`spec_cpu`="Qualcomm SD855 + SDX50 Octacore",
`spec_size`="접힘 : 160.9 x 62.8 x 17mm , 펼침 : 160.9 x 117.8 x 6.9mm / 265g",
`manufacturer_id`=1,
`release` = DATE_FORMAT('2019-09-06','%Y-%m-%d')
WHERE (`_id`=%{device.id});

/* 기존 용량(device_storage._id) */
UPDATE `device_storage`
SET `storage`="256GB",
`price`=1190000
WHERE `_id`=%{device_storage._id}

/* 새 용량(device_id) */
INSERT INTO device_storage(`device_id`,`storage`,`price`)
VALUES (
  %{device_id},
  "512GB",
  "1250000"
)
/* 기존 색상(device_id, carrier_id, device_storage._id) */
UPDATE `device_image`
SET `device_id`= %{device_id},
`name`="블루",
`image_url`="A2210_blue.jpg",
`color`="0000ff",
`carrier_id`= %{carrier_id}
WHERE `_id`=%{device_storage._id}

/* 새 색상(device_id, carrier_id) */
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)
VALUES (
  %{device_id},
  "레드",
  "LGM-G900_red.jpg",
  "ff0000",
  %{mobile_carrier_id}
)
COMMIT; ===

### 디바이스 컬럼 업데이트 ###
UPDATE `device`
SET `release` = DATE_FORMAT('2019-08-23','%Y-%m-%d') 
WHERE _id=39;

### 요금제 컬럼 업데이트
UPDATE `mobile_plan`
SET `category_id`=5,
`name`="뉴 T끼리 맞춤형(200분+6GB)",
`price`=10000,
`data`="100GB",
`call`="조금",
`message`="조금더"
WHERE _id = 113;

### 모든 디바이스의 컬럼을 다른 칼럼의 값+문자열로 변경
BEGIN;
UPDATE `device`
SET `image_url`= CONCAT(device.model,"_IMG.jpg");
COMMIT;