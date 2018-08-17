# 数据字典

## 这是个什么东西:

这是一个数据字典，用来帮助程序员记录数据库里面的字段备注。通常情况下，一个有良好习惯的程序员在建表的时候，字段名都会添加备注，这样方便以后其他团队成员容易理解每个表每个字段的意思。但难免会遇到一些不遵守规则的程序员， 这个时候，使用数据字典，会帮你解决这个难题。


## 安装
1. 准备好一个数据库，用作保存数字字典的备注。数据库中需要创建一张dict_data表。脚本如下：
```sql
CREATE TABLE `dict`.`dict_data`(  
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `dbName` VARCHAR(30) NOT NULL DEFAULT '' COMMENT '数据库名',
  `tableName` VARCHAR(30) NOT NULL DEFAULT '' COMMENT '表名',
  `columnName` VARCHAR(30) NOT NULL DEFAULT '' COMMENT '字段名',
  `content` VARCHAR(50) NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=INNODB CHARSET=utf8;
```
2.配置nginx，目录指到项目根目录。config文件夹和bak文件夹需要创建好，具备可写入权限。

3.第一次打开项目，会跳转到install.php页面，需要填写数据库配置，和要使用的注释数据库配置。
提交后，配置信息会缓存到config目录下的main.php文件中。并且页面会跳转到dict.php?fresh=1页面，进行读取数据库字段信息。
初始化后，会将数据库字段缓存到bak目录下的data.php文件。

4.每次访问页面，会使用缓存文件。如果需要刷新数据库信息，访问`dict.php?fresh=1`。


## 使用方法:

你可以双击表名后面的括号，给表添加注释。你也可以双击“本地备注”字段，给数据库字段添加备注。 如果你觉得数据库注释比较好，可以直接点击“使用数据库注释”，一键将数据库的注释复制到本地备注数据库里。

## 其他使用技巧

如果你想重新加载数据库结构，可以跳转到`域名/dict.php?fresh=1`即可。

这个帮助页面，到此也就差不多要结束了，如果你以后想看这个页面，请手工输入URL跳转到`域名/help.php`即可。

## 关于我

一个普普通通的程序员，我将这段代码放在Github上，欢迎大家**Fork**，一起帮助完善用户体验，谢谢大家。

##界面截图
![一个普通的界面](https://ooo.0o0.ooo/2015/12/04/56613ab1d777a.png)
