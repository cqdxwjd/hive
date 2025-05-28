build:
	./build.sh -hadoop 3.3.5 -tez 0.9.2
	if [ $? -ne 0 ]; then exit 1; fi
	docker tag apache/hive:3.1.3 hub.hmf.xyz/emr/hive:3.1.3
	docker push hub.hmf.xyz/emr/hive:3.1.3