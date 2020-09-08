### 통신사 요금제 종류 추가 ###
# "SKT" 요금제 종류 "5G" 추가 >>>>
INSERT INTO mobile_plan_category(mobile_carrier_id, name) 
VALUES ( (SELECT _id FROM mobile_carrier WHERE name="SKT"), "5G" );

### 통신사 요금제 추가 ###
# "SKT"의 "5G" 요금제 "슬림" 추가 >>>
INSERT INTO mobile_plan ( `category_id`, `name`, `price`, `data`, `call`, `message` )
VALUES ( 
	(
		SELECT _id FROM mobile_plan_category WHERE name = "5G" AND mobile_carrier_id = ( 
			SELECT _id FROM mobile_carrier WHERE name="SKT"
		)
	),
	"슬림",
	55000,
  9000,
  -1,
  -1
);

### 디바이스 용량및 가격 추가
INSERT INTO device_storage(`device_id`,`storage`,`price`)
VALUES (
  2,
  "256GB",
  1199000
);

### 디바이스 추가 ###
# (SELECT _id FROM manufacturer WHERE name="삼성전자")
BEGIN;
INSERT INTO device (`name`,`model`,`image_url`,`spec_display`,`spec_cam`,`spec_cpu`,`spec_size`,`manufacturer_id`)
VALUES (
  "갤럭시 S20+",
  "SM-G986N",
  "SM-G986N_IMG.jpg",
  "6.7″QHD+ WQHD+ HID",
  "전면 : 1,000만(듀얼 픽셀 AF) / 후면 : 1,200만(F2.2 초광각) + 1,200만 2PD OIS(F1.8 일반) + 6,400만 OIS(F2.0 망원) + ToF(VGA)",
  "Qualcomm SD865 + SDX55M",
  "161.9 x 73.7 x 7.8mm / 186g",
  1,
  "2020-03-06"
);
#SET @mDevice_id=LAST_INSERT_ID();
SET @mDevice_id = (SELECT _id FROM device ORDER BY _id DESC LIMIT 1);
/*해당 디바이스 용량 추가*/
INSERT INTO device_storage(`device_id`,`storage`, `price`)
VALUES
(@mDevice_id, "256GB", 1353000);
/*해당 디바이스 색상 추가*/
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`)
VALUES
(@mDevice_id, "회색", "SM-N976N_IMG_gray.jpg", "545454"),
(@mDevice_id, "클라우드블루", "SM-N976N_IMG_cblue.jpg", "a4c8e1"),
(@mDevice_id, "흰색", "SM-N976N_IMG_white.jpg", "ffffff"),
(@mDevice_id, "아우라블루", "SM-N976N_IMG_blue.jpg", "0000ff"),
(@mDevice_id, "아우라레드", "SM-N976N_IMG_red.jpg", "ff0000");
COMMIT;

### 색상추가 ###
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`)
VALUES
(1, "미스틱브론즈", "SM-N986N_img_bronze.jpg", "af7e75"),
(1, "미스틱화이트", "SM-N986N_img_white.jpg", "ffffff"),
(1, "미스틱블랙", "SM-N986N_img_black.jpg", "000000");

### 특정 디바이스({id}) 통신사 색상 추가 ###
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)
VALUES
({id},"미스틱그레이", "SM-N981N_img_gray.jpg", "545454", NULL),
({id},"미스틱브론즈", "SM-N981N_img_bronze.jpg", "af7e75", NULL),
({id}},"레드","SM-N981N_img_red.jpg","ff0000", 1),
({id},"블루","SM-N981N_img_blue.jpg","0000ff", 2),
({id},"핑크","SM-N981N_img_pink.jpg","ffe6ff", 3);

INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)
VALUES
({id},"코스믹그레이", "SM-G988N_img_gray.jpg", "545454", NULL),
({id},"코스믹블랙", "SM-G988N_img_black.jpg", "000000", NULL);

