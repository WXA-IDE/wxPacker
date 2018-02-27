# wxPacker


![][php]  ![][1] ![][2] 

微信小程序打包器`Ver:1.0.200` ，用于自动化构建应用与提交 

Last Update: `2018-02-27 12:17 `

## 目录结构 
```
|____wxPack.php				Sample文件
|____README.md				本文件
| |____Input				测试文件
| |____Output				输出目录
| |____Useless				没用的文件夹（开发备份）
| |____Lib					wxPacker库文件
| | |____wxPacker.class.php
```


## 使用方法 Ver 1.0
```
<?php
$wP = new wxPacker( $Input );
$Input = "Input/wxapp_source";
$Output = "Output/wxapp.wx";

echo $wP->getPack();
echo $wP->getPackNoGzip();
$wP->savePack( $Output );
$wP->savePackNoGzip( $Output );
```

## 更新记录
18.02.27 12:14
### 1802271214 v1.0.200
>md5: fa3b817d4ee0d9d9c6dd7f3b9d33b855

优化`get_all_files`函数，使打包更准确


### 1802261428 v1.0.101
MD5: 2c1f76948f1ad95f73063786128ff27c  
增加3处TODO  

### 1802250025 v1.0.100
v1.0发布

[1]:https://img.shields.io/travis/rust-lang/rust.svg
[php]:https://img.shields.io/packagist/php-v/symfony/symfony.svg?style=flat-square
[2]:https://img.shields.io/redmine/plugin/stars/redmine_xlsx_format_issue_exporter.svg
