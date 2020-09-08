### 특정 디바이스 스펙 변경 ###
UPDATE `biz_online`.`device` 
SET `spec_size` = '161.6 x 75.2 x 8.3 mm / 192g' 
WHERE (`_id` = '2');

### 특정 디바이스 전체 스펙 변경 ###
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
WHERE (`_id`=19);

# 기존 용량 
UPDATE `device_storage`
SET `storage`="256GB",
`price`=1190000
WHERE `_id`={$id}

# 새 용량

# 기존 색상

# 새 색상

COMMIT;

### 디바이스 컬럼 업데이트 ###

UPDATE `device`
SET `release` = DATE_FORMAT('2019-09-06','%Y-%m-%d') WHERE _id=19;