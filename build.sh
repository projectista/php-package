#!/usr/bin/env bash

 grep -RIl "{{ .VendorName }}" --exclude=build.sh | xargs sed -i .bak "s/{{ .VendorName }}/Company/g"