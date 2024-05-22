-- 創建學生表
CREATE TABLE student (
    sno VARCHAR(10) PRIMARY KEY,
    sname VARCHAR(20),
    sage INT,
    ssex VARCHAR(5)
);

-- 創建教師表
CREATE TABLE teacher (
    tno VARCHAR(10) PRIMARY KEY,
    tname VARCHAR(20)
);

-- 創建課程表
CREATE TABLE course (
    cno VARCHAR(10),
    cname VARCHAR(20),
    tno VARCHAR(20),
    CONSTRAINT pk_course PRIMARY KEY (cno, tno)
);

-- 創建成績表
CREATE TABLE sc (
    sno VARCHAR(10),
    cno VARCHAR(10),
    score FLOAT(4,2),
    CONSTRAINT pk_sc PRIMARY KEY (sno, cno)
);

-- 插入學生表數據
INSERT INTO student VALUES ('s001','張三',23,'男');
INSERT INTO student VALUES ('s002','李四',23,'男');
INSERT INTO student VALUES ('s003','吳鵬',25,'男');
INSERT INTO student VALUES ('s004','琴沁',20,'女');
INSERT INTO student VALUES ('s005','王麗',20,'女');
INSERT INTO student VALUES ('s006','李波',21,'男');
INSERT INTO student VALUES ('s007','劉玉',21,'男');
INSERT INTO student VALUES ('s008','蕭蓉',21,'女');
INSERT INTO student VALUES ('s009','陳蕭曉',23,'女');
INSERT INTO student VALUES ('s010','陳美',22,'女');
INSERT INTO student VALUES ('s011','王麗',24,'女');
INSERT INTO student VALUES ('s012','蕭蓉',20,'女');

-- 插入教師表數據
INSERT INTO teacher VALUES ('t001', '劉陽');
INSERT INTO teacher VALUES ('t002', '諶燕');
INSERT INTO teacher VALUES ('t003', '胡明星');

-- 插入課程表數據
INSERT INTO course VALUES ('c001','J2SE','t002');
INSERT INTO course VALUES ('c002','Java Web','t002');
INSERT INTO course VALUES ('c003','SSH','t001');
INSERT INTO course VALUES ('c004','Oracle','t001');
INSERT INTO course VALUES ('c005','SQL SERVER 2005','t003');
INSERT INTO course VALUES ('c006','C#','t003');
INSERT INTO course VALUES ('c007','JavaScript','t002');
INSERT INTO course VALUES ('c008','DIV+CSS','t001');
INSERT INTO course VALUES ('c009','PHP','t003');
INSERT INTO course VALUES ('c010','EJB3.0','t002');

-- 插入成績表數據
INSERT INTO sc VALUES ('s001','c001',78.9);
INSERT INTO sc VALUES ('s002','c001',80.9);
INSERT INTO sc VALUES ('s003','c001',81.9);
INSERT INTO sc VALUES ('s004','c001',50.9);
INSERT INTO sc VALUES ('s005','c001',59.9);
INSERT INTO sc VALUES ('s001','c002',82.9);
INSERT INTO sc VALUES ('s002','c002',72.9);
INSERT INTO sc VALUES ('s003','c002',82.9);
INSERT INTO sc VALUES ('s001','c003',59.0);
INSERT INTO sc VALUES ('s006','c003',99.8);
INSERT INTO sc VALUES ('s002','c004',52.9);
INSERT INTO sc VALUES ('s003','c004',20.9);
INSERT INTO sc VALUES ('s004','c004',59.8);
INSERT INTO sc VALUES ('s005','c004',50.8);
INSERT INTO sc VALUES ('s002','c005',92.9);
INSERT INTO sc VALUES ('s001','c007',78.9);
INSERT INTO sc VALUES ('s001','c010',78.9);
