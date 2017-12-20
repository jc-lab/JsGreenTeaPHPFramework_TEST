<?php
namespace JsGreenTeaPHPFramework;

class SiteConfig extends BaseConfig
{
    public function init()
    {
        $this->frameworksql_host = "localhost";
        $this->frameworksql_port = 3306;
        $this->frameworksql_username = "testsite";
        $this->frameworksql_password = "testsite";
        $this->frameworksql_socket = "";
        $this->frameworksql_dbname = "testsite";
        $this->frameworksql_tableprefix = "fw_";

        $this->sitesql_host = "localhost";
        $this->sitesql_port = 3306;
        $this->sitesql_username = "testsite";
        $this->sitesql_password = "testsite";
        $this->sitesql_socket = "";
        $this->sitesql_dbname = "testsite";
        $this->sitesql_tableprefix = "site_";

        $this->frameworkredis_host = NULL;// "localhost";
        $this->frameworkredis_port = 6379;
        $this->frameworkredis_password = NULL;
        $this->frameworkredis_dbidx = 0;
        $this->frameworkredis_keyprefix = "";
        
        self::setRoute('/', 'TestController');
        self::setRoute('/test', 'TestController');
        self::setRoute('/test/sub', 'TestSubController');
        self::setRoute('/test/sub2', 'TestSubController');
        self::setRoute('/sub/test', 'SubTestController');
    }
};
