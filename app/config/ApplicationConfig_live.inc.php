<?php
define('NLOGGER_ENV', 'prod');
define('JOB_SERVICE_ENV', '{jobservice.apply.master.resdex.com}');
define("RP_SERVICE_ENV","{rpservice.master.resdex.com}");
define("DROPDOWNDATA_SERVICE_ENV","{ddservice.resdex.com}");
define("RESUME_SERVICE_MASTER","{resumeservice.master.resdex.com}");
define("RESUME_SERVICE_SLAVE","{resumeservice.slave.resdex.com}");
define("RESUME_SERVICE_TIMEOUT",1000);
define("RESUME_EDIT_SERVICE_MASTER","{ncrfbr.resumeedit.master.resdex.com}");
define("SERVICE_VERSION",4);
define('RESUME_SERVICE_APP_ID', '107');
define("RESUME_SERVICE_SEL_SLAVE_SERVER",RESUME_SERVICE_SLAVE);
define("RESUME_SERVICE_SEL_MASTER_SERVER",RESUME_SERVICE_MASTER);
define("RESUME_SERVICE_TIMEOUT",1000);
define('APPLY_APP_ID','107');
define('SERVICE_APPID',107);
define('APPLY_HISTORY_ENV','LIVE');
define('CONNECTION_TIME_OUT',2);
define('REQUEST_TIME_OUT',2);

define('DOMAIN_MANAGER_CONFIG', "/apps/ApplyRevamp/current/app/config/");
define("NC_DB_CONFIG",'/apps/ApplyRevamp/current/app/config/database/');
define('NAUKRI_CACHE_CONFIG', '/apps/ApplyRevamp/current/app/config/');
#define("NC_DB_CONFIG",'/usr/local/apache-2.4.3/htdocs/JobSearchRevamp/PoorvaJSRevamp/app/config/
define("NC_REQUEST_PROVIDER",'ncSuperGlobalRequestProvider');
define('_COOKIE_DOMAIN', '.naukri.com');
define('_Key_Old'   , 'rgfh15@(j4567cvbnertyvb');
define('_SubKey_Old', 'fgh(*%j45^@6xcvb345vbn');
define('_Key_New'   , '984Y0y0Hon3yS1ngH@&#');
define('_SubKey_New', '702Ch@@rB0taL65V0dk^@');
define('_TOUT','1800');
define('FILESTORAGE_SERVICE_ENV', 'PROD');
define('FILESTORAGE_SERVICE_CONFIG', '/apps/ApplyRevamp/current/app/config/');
define('NC_FILEUPLOAD_SERVICE_ENV','PROD');
define('DROPDOWNDATA_SERVICE_ENV', 'PROD');
define('DROPDOWNDATA_SERVICE_ID',107);
define('CSITE_APP_ID','128');
//dont know about this
define("_AUTH_SERVER_URL",'http://dev1.infoedge.com:8000/nLogin/Login.php');
define('CL_CONFIG', "/apps/ApplyRevamp/current/app/config/");
define('DEFAULT_MAIL_SENDER','zend');
define('RP_APP_ID','126');
define('MNJ_REGISTER_URL','http://my.naukri.com/manager/register.php');
define('UPLOAD_CONFIG','/apps/ApplyRevamp/current/app/config/');
define('SMJLT_URL', 'http://jobsearch.naukri.com/mynaukri/api/msngrsave_xmlapi.php');
define('ANTIWORD_PATH', '/usr/bin/antiword');
define('UPLOAD_PATH', '/var/log/CommonUpload');
define('PERL_PATH', '/usr/bin/perl');
define('DOCFRAC_PATH', '/usr/bin/docfrac');
define('DOCX2TXT_PATH', '/usr/local/docx2txt/docx2txt.pl');
define('PDF2TXT_PATH', '/usr/local/bin/pdftotext');
define('SM_SAVE_APPLY_URL','http://service.sm.resdex.com/api/saveApply');

define('CREDERITY_SERVICE_HOST','{crederity.master.resdex.com}');
define('CERTIFICATION_SERVICE_VERSION','4');
define('CERTIFICATION_SERVICE_CONN_TIMEOUT','2');
define('CERTIFICATION_SERVICE_READ_TIMEOUT','2000000');
define('CERTIFICATION_SERVICE_HOST','{certification.master.resdex.com}');
define('CREDERITY_SERVICE_VERSION','4');
define('CREDERITY_SERVICE_CONN_TIMEOUT','2');
define('CREDERITY_SERVICE_READ_TIMEOUT','2000000');
$arsServerArray = array (
   array(
       "ip"=>"10.208.66.159",
       "port" => "4444"
  ),
  array(
       "ip" => "10.208.66.159",
       "port" => "4445"
  ),
   array(
       "ip"=>"10.208.66.159",
       "port" => "4446"
  ),
  array(
       "ip" => "10.208.66.159",
       "port" => "4447"
  ),
array(
       "ip" => "10.208.66.159",
       "port" => "4448"
  )
);
$randomID = array_rand($arsServerArray, 1);
$ARS_SERVER  = $arsServerArray[$randomID]["ip"];
$ARS_PORT    = $arsServerArray[$randomID]["port"];
define("APPLY_RELEVANCE_SERVICE_API_URLS" , "http://$ARS_SERVER:$ARS_PORT/applyrelevancescore");
define("UNREG_APPLY_RELEVANCE_SERVICE_API_URLS", "http://10.208.66.159:4455/applyrelevancescoreUnreg");
define("RESMAN_APP_ID",104);
define("STATIC_MAPPING_FILE_PATH","/apps/ApplyRevamp/current/src/Naukri/ApplyBundle/Resources/lib/paf/");
define("ENCRYPT_CONFIG_PATH","/apps/ApplyRevamp/current/app/config");
define("BMS_PATH",'/web/jobs.naukri.com/advertiser');
define('CL_CONFIG', "/apps/ApplyRevamp/current/app/config/");
define("REST_API_ENV", "PROD");
define('UNREG_APP_ID','199');
define("_Key_New_AMR", "m@i!er_k3y");
define("_SubKey_New_AMR", "m@i!er_subk3y");
define("NC_ENCRYPT_CONFIG","/apps/ApplyRevamp/current/app/config");
define("NC_ENC_KEY_DIR", NC_ENCRYPT_CONFIG);
define("NCREST_REFERER_URL_SUBSTR","applyapi");
define('ACM_UPLOAD_PATH', '/var/log/CommonUpload/acmbanners/live');
define('ACM_BANNER_HOME', 'HOME=/var/log/CommonUpload/acmbanners/ && ');
define('ACM_FILES_PATH', 'http://static.naukimg.com/acmbanners/live');
define("JP_GET_REFERRED_BY_URL","http://posting.naukri.com/API.php/pestAPI/getReferredBy?xid=");
define('MARKACTIVE_URL', 'http://service.mnj.resdex.com/mnjapi/v1/dailyupdates');
define('LOGIN_AUTH_GEN_URL','https://login.naukri.com/loginapi/v1/login');
define('MARKACTIVE_ENV','LIVE');
