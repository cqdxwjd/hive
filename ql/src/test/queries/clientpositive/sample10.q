--! qt:dataset:srcpart
set hive.mapred.mode=nonstrict;
set hive.exec.submitviachild=false;
set hive.exec.submit.local.task.via.child=false;
set hive.exec.dynamic.partition=true;

set hive.exec.reducers.max=4;
set hive.input.format=org.apache.hadoop.hive.ql.io.CombineHiveInputFormat;
set hive.default.fileformat=RCFILE;
set hive.exec.pre.hooks = org.apache.hadoop.hive.ql.hooks.PreExecutePrinter,org.apache.hadoop.hive.ql.hooks.EnforceReadOnlyTables,org.apache.hadoop.hive.ql.hooks.UpdateInputAccessTimeHook$PreExec;

create table srcpartbucket (key string, value string) partitioned by (ds string, hr string) clustered by (key) into 4 buckets;

insert overwrite table srcpartbucket partition(ds, hr) select * from srcpart where ds is not null and key < 10;

explain extended
select ds, count(1) from srcpartbucket tablesample (bucket 2 out of 4 on key) where ds is not null group by ds ORDER BY ds ASC;

select ds, count(1) from srcpartbucket tablesample (bucket 2 out of 4 on key) where ds is not null group by ds ORDER BY ds ASC;

select ds, count(1) from srcpartbucket tablesample (bucket 1 out of 2 on key) where ds is not null group by ds ORDER BY ds ASC;

select * from srcpartbucket where ds is not null ORDER BY key ASC, value ASC, ds ASC, hr ASC;


