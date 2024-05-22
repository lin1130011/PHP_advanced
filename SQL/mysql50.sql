學生表:student
成績表:sc
教師表:teacher
課程表:course

查詢學生表的 前10條資料
SELECT * FROM `student` LIMIT 10

查詢成績表所有成績的最低分,平均分,總分
SELECT MIN(`sc`.`score`) as "最低分", 
        AVG(`sc`.`score`) as "平均分",
        MAX(`sc`.`score`) as "最高分" 
    FROM `sc`;

查詢老師 “諶燕” 所帶的課程設數量
SELECT `teacher`.`tname` as "老師",
	COUNT(`course`.`cno`) as "帶課數量"
    FROM `teacher` 
    LEFT JOIN `course` ON `teacher`.`tno` = `course`.`tno`
    WHERE `teacher`.`tname` LIKE "%燕"
    GROUP BY `teacher`.`tname`;

查詢所有老師所帶 的課程 數量
SELECT `teacher`.`tname` as "老師",
	COUNT(`course`.`cno`) as "帶課數量"
    FROM `teacher` 
    LEFT JOIN `course` ON `teacher`.`tno` = `course`.`tno`
    GROUP BY `teacher`.`tname`;

查詢姓”張”的學生名單
SELECT * FROM `student`
    WHERE `student`.`sname` LIKE "張%"

查詢課程名稱為'Oracle'且分數低於60 的學號和分數
SELECT `course`.`cname` as "課程名稱", 
	`student`.`sno` AS "學號",
	`student`.`sname` AS "學生姓名",
	`sc`.`score` as "分數"
    FROM `course`
    LEFT JOIN `sc` on `course`.`cno` = `sc`.`cno`
    LEFT JOIN `student` on `sc`.`sno` = `student`.`sno`
    WHERE `course`.`cname` = "Oracle" && `sc`.`score` < 60

查詢所有學生的選課 課程名稱
SELECT `student`.`sname` as "姓名",
	`course`.`cname` as "課程名稱"
    FROM `student`
    LEFT JOIN `sc` on `student`.`sno` = `sc`.`sno`
    LEFT JOIN `course` on `sc`.`cno` = `course`.`cno`

查詢任何一門課程成績在70 分以上的學生姓名.課程名稱和分數
SELECT `student`.`sname` as "姓名",
	`course`.`cname` as "課程名稱",
    `sc`.`score` as "分數"
    FROM `student`
    LEFT JOIN `sc` on `student`.`sno` = `sc`.`sno`
    LEFT JOIN `course` on `sc`.`cno` = `course`.`cno`
    WHERE `sc`.`score` > 70

查詢不及格的課程,並按課程號從大到小排列 學號,課程號,課程名,分數
SELECT `student`.`sno` as "學號",
	`course`.`cno` as "課程號",
    `course`.`cname` as "課程名",
    `sc`.`score` as "分數"
    FROM `student`
    LEFT JOIN `sc` on `student`.`sno` = `sc`.`sno`
    LEFT JOIN `course` on `sc`.`cno` = `course`.`cno`
    WHERE `sc`.`score` < 60
    ORDER BY `course`.`cno` DESC

10查詢沒學過”諶燕”老師講授的任一門課程的學號,學生姓名
SELECT `student`.`sno` AS "學號",
       `student`.`sname` AS "姓名"
FROM `student`
WHERE `student`.`sno` NOT IN (
    SELECT `sc`.`sno`
    FROM `sc`
    JOIN `course` ON `sc`.`cno` = `course`.`cno`
    JOIN `teacher` ON `course`.`tno` = `teacher`.`tno`
    WHERE `teacher`.`tname` = '諶燕'
);

查詢兩門以上不及格課程的同學的學號及其平均成績

檢索'c004'課程分數小於60,按分數降序排列的同學學號

查詢'c001'課程比'c002'課程成績高的所有學生的學號

查詢平均成績大於60 分的同學的學號和平均成績

查詢所有同學的學號.姓名.選課數.總成績

查詢姓”劉”的老師的個數

查詢只學”諶燕”老師所教的課的同學的學號:姓名

查詢學過”c001″並且也學過編號”c002″課程的同學的學號.姓名

查詢學過”諶燕”老師所教的所有課的同學的學號:姓名

查詢課程編號”c004″的成績比課程編號”c001″和”c002″課程低的所有同學的學號.姓名

查詢所有課程成績小於60 分的同學的學號.姓名

查詢沒有學課的同學的學號.姓名

查詢與學號為”s001″一起上過課的同學的學號和姓名

查詢跟學號為”s005″所修課程完全一樣的同學的學號和姓名

查詢各科成績最高和最低的分 顯示:課程ID,最高分,最低分

按各科平均成績和及格率的百分數 照平均從低到高顯示

查詢每個課程的老師及平均分從高到低顯示 老師名稱,課程名稱,平均分數

統計列印各科成績,各分數段人數:課程ID,課程名稱,verygood[100-86], good[85-71], bad[<60]

查詢各科成績前三名的記錄:(不考慮成績並列情況)

查詢每門課程被選修的學生數

查詢出只選修了兩門課程的全部學生的學號和姓名

查詢男生.女生人數

 留言
   32-1. 查詢每個課程的男生女生總數
查詢同名同姓學生名單,並統計同名人數

查詢年紀最小跟最大的學生名單(注:Student 表中Sage 列的型別是int)

查詢每門課程的平均成績,結果按平均成績升序排列,平均成績相同時,按課程號降序排列

查詢平均成績大於85 的所有學生的學號.姓名和平均成績

查詢課程編號為c001 且課程成績在80 分以上的學生的學號和姓名

檢索每課程第二高分的學號 分數(考慮成績並列)

求選了課程的學生人數

查詢選修”諶燕”老師所授課程的學生中,成績最高的學生姓名及其成績

查詢不同課程成績有相同的學生的學號.課程號.學生成績

所有課程排名成績(不考慮並列) 學號,課程號,排名,成績 照課程,排名排序

所有課程排名成績(考慮並列) 學號,課程號,排名,成績 照課程,排名排序

做所有學生顯示學生名稱,課程名稱,成績,老師名稱的視圖

查詢上過所有老師教的課程的學生 學號,學生名

查詢包含數字的課程名

查詢只有英文的課程名

查詢所有學生的平均成績 並排名 , 學號,學生名,排名,平均成績(不考慮並列) 對平均成績高到低及學號低到高排序

查詢所有學生的平均成績 並排名 , 學號,學生名,排名,平均成績(考慮並列) 對平均成績高到低及學號低到高排序

查詢課程有學生的成績是其他人成績兩倍的學號 學生名

