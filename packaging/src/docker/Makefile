#  Licensed under the Apache License, Version 2.0 (the "License");
#  you may not use this file except in compliance with the License.
#  You may obtain a copy of the License at
#
#      http://www.apache.org/licenses/LICENSE-2.0
#
#  Unless required by applicable law or agreed to in writing, software
#  distributed under the License is distributed on an "AS IS" BASIS,
#  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#  See the License for the specific language governing permissions and
#  limitations under the License.

build:
	./build.sh -hadoop 3.3.5 -tez 0.9.2 -repo hub.hmf.xyz/emr
	if [ $? -ne 0 ]; then exit 1; fi
	docker push hub.hmf.xyz/emr/hive:4.0.0-beta-1