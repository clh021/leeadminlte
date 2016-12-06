<?php
$consoleStr='
- 活在当下
    - 开启定时休息，多喝水
    - 时刻准备着为共产主义事业而奋斗
    - lianghong 添加yii2 apps模式(避免多入口扩展冲突的需求，以及方便迁移升级) 
    - ln s adminlte 主页 如果慢加 lazy 和 iframe
    - 作品集访问可根据日期或其它加密串自动跳转
    - 青春不再来 展现本内容
- 青春不再来
    - 学习nodejs
    - 逐步完善nodejs作品
    - 后端js框架 express
    - 后端js数据库mysql,PostgreSQL...
    - 了解熟悉PostgreSQL使用
    - 前端ui 
    - express kit admin 探索 合体的js优秀开源项目
    - 收集整理插件主题(前后台)，并简单记录效果体验
    - 收集所有后台主题插件
    - 自动生成模块化插件
    - 插件依赖
    - 收费插件和收费主题的授权机制
    - wordpress-laravel 合体，主题，插件
    - laravel 生成器 
    - laravel 开源后台管理';
$consoleStr = str_replace("\n", '\n', $consoleStr);
echo 'console.log("'.$consoleStr.'");';
echo 'console.log("请将简历发送至 %c lianghong@dongshenghuo.com（ 邮件标题请以“姓名-应聘XX职位-来自console”命名）","color:red");';