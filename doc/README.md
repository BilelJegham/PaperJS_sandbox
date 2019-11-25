# Sommeil
Avec les sessions
https://www.googleapis.com/fitness/v1/users/me/sessions
https://www.googleapis.com/fitness/v1/users/me/sessions?startTime=2014-04-01T00:00:00.000Z&endTime=2014-04-30T23:59:59.999Z
 
```json
{
  "deletedSession": [], 
  "nextPageToken": "1574242943232", 
  "session": [
    {
      "modifiedTimeMillis": "1571726173706", 
      "endTimeMillis": "1571723579641", 
      "description": "", 
      "activityType": 72, 
      "application": {
        "packageName": "com.northcube.sleepcycle"
      }, 
      "startTimeMillis": "1571696890917", 
      "id": "com.northcube.sleepcycle.1571696890917", 
      "name": "Analyse du sommeil"
    }, 
    ...
}
```
 
 
# Nombre de pas, km, kg
https://ithoughthecamewithyou.com/post/export-google-fit-daily-steps-to-a-google-sheet
 
https://www.googleapis.com/fitness/v1/users/me/dataset:aggregate
{
 
  "startTimeMillis": 1574181600000,
  "endTimeMillis": 1574182560000,
  "aggregateBy": [
    {
        "dataTypeName": "com.google.step_count.delta",
        "dataSourceId": "derived:com.google.step_count.delta:com.google.android.gms:estimated_steps"
      },
      {
        "dataTypeName": "com.google.weight.summary",
        "dataSourceId": "derived:com.google.weight:com.google.android.gms:merge_weight"
      },
      {
        "dataTypeName": "com.google.distance.delta",
        "dataSourceId": "derived:com.google.distance.delta:com.google.android.gms:merge_distance_delta"
      }
  ],
 
    "bucketByTime": { "durationMillis": 86400000 }
}
 9----
 {
 "bucket": [
  {
   "startTimeMillis": "1574181600000",
   "endTimeMillis": "1574182560000",
   "dataset": [
    {
     "dataSourceId": "derived:com.google.step_count.delta:com.google.android.gms:aggregated",
     "point": [
      {
       "startTimeNanos": "1574181636416721574",
       "endTimeNanos": "1574182425331450114",
       "dataTypeName": "com.google.step_count.delta",
       "originDataSourceId": "raw:com.google.step_count.cumulative:Xiaomi:Redmi Note 7:56e38e1c0a0645b0:Step Counter",
       "value": [
        {
         "intVal": 736,
         "mapVal": []
        }
       ]
      }
     ]
    },
    {
     "dataSourceId": "derived:com.google.weight.summary:com.google.android.gms:aggregated",
     "point": []
    },
    {
     "dataSourceId": "derived:com.google.distance.delta:com.google.android.gms:aggregated",
     "point": [
      {
       "startTimeNanos": "1574181636416721574",
       "endTimeNanos": "1574182425331450114",
       "dataTypeName": "com.google.distance.delta",
       "originDataSourceId": "raw:com.google.step_count.cumulative:Xiaomi:Redmi Note 7:56e38e1c0a0645b0:Step Counter",
       "value": [
        {
         "fpVal": 575.2878494262695,
         "mapVal": []
        }
       ]
      }
     ]
    }
   ]
  }
 ]
}
----
 
 
##Minute activite
{
 
  "startTimeMillis": 1573404420000,
  "endTimeMillis": 1573409460000,
  "aggregateBy": [
    {
        "dataTypeName": "com.google.heart_minutes"
      }
  ],
 
    "bucketByTime": { "durationMillis": 86400000 }
}
 
## Activité et type d'activité
 
 
 
 
{
 
  "startTimeMillis": 1573404420000,
  "endTimeMillis": 1573409460000,
  "aggregateBy": [
    {
        "dataTypeName": "com.google.activity.segment"
      }
  ],
 
    "bucketByTime": { "durationMillis": 86400000 }
}
 
 
 
 
 
 
 
 
 
 
 
---
 
        "name": "com.google.heart_minutes"
 
            "dataType": {
        "field": [
          {
            "name": "height", 
            "format": "floatPoint"
          }
        ], 
        "name": "com.google.height"
 
           "dataType": {
        "field": [
          {
            "name": "speed", 
            "format": "floatPoint"
          }
        ], 
        "name": "com.google.speed"
 
              "dataType": {
        "field": [
          {
            "name": "calories", 
            "format": "floatPoint"
          }
        ], 
        "name": "com.google.calories.expended"
 
 
 
        

