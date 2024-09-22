### command
```bash
balafon --db:resetdb SiteNoteBookController --force --querydebug
balafon --users:register --controller:SiteNoteBookController cbondje@igkgdev.com
balafon --users:change --set:clStatus=1 cbondje@igkgdev.com
balafon --users:login SiteNoteBookController cbondje@igkgdev.com
balafon --db:import SiteNoteBookController Sites -f:/Volumes/Data/Dev/JsonDatas/sites.json --querydebug --autoregister
```

```bash
open -a docker
docker-compose start
```

```sql
mysql -uroot -p -h 0.0.0.0 igkdev.dev
```