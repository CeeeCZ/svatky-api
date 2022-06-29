
## License

Code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Konkrétní den
```http
GET https://domain.cz/api/day/yyyy-mm-dd
```
Response:

```json
    {
        "date":"2022-04-18",
        "dayNumber": "18",
        "dayInWeek": "pondělí",
        "monthNumber": "4",
        "month":{
            "nominative":"duben",
            "genitive":"dubna"
        },
        "year":"2022",
        "name":"Valérie",
        "isHoliday": true,
        "holidayName":"Velikonoční pondělí"
    }
```

Týden od prvního dne včetně
```http
GET https://domain.cz/api/week/yyyy-mm-dd
```
```json
    {
        "week": [
            {
                "date": "2022-04-15",
                "dayNumber": "15",
                "dayInWeek": "pátek",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Anastázie",
                "isHoliday": true,
                "holidayName": "Velký pátek"
            },
            {
                "date": "2022-04-16",
                "dayNumber": "16",
                "dayInWeek": "sobota",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Irena",
                "isHoliday": false,
                "holidayName": null
            },
            {
                "date": "2022-04-17",
                "dayNumber": "17",
                "dayInWeek": "neděle",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Rudolf",
                "isHoliday": false,
                "holidayName": null
            },
            {
                "date": "2022-04-18",
                "dayNumber": "18",
                "dayInWeek": "pondělí",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Valérie",
                "isHoliday": true,
                "holidayName": "Velikonoční pondělí"
            },
            {
                "date": "2022-04-19",
                "dayNumber": "19",
                "dayInWeek": "úterý",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Rostislav",
                "isHoliday": false,
                "holidayName": null
            },
            {
                "date": "2022-04-20",
                "dayNumber": "20",
                "dayInWeek": "středa",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Marcela",
                "isHoliday": false,
                "holidayName": null
            },
            {
                "date": "2022-04-21",
                "dayNumber": "21",
                "dayInWeek": "čtvrtek",
                "monthNumber": "4",
                "month": {
                    "nominative": "duben",
                    "genitive": "dubna"
                },
                "year": "2022",
                "name": "Alexandra",
                "isHoliday": false,
                "holidayName": null
            }
        ]
    }
```