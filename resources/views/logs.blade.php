<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
    td {width: 160px; text-align: center}
</style>
    @if(count($logs) > 0)
        <table>
            <thead>
                <th>Day</th>
                <th>Uri</th>
                <th>From</th>
                <th>IP</th>
                <th>Count</th>
            </thead>
            <tbody>
                @foreach($logs as $log)
                    @foreach($log as $dayLog)
                        <tr>
                            <td>{{$dayLog['time']}}</td>
                            <td>{{$dayLog['uri']}}</td>
                            <td>{{$dayLog['from']}}</td>
                            <td>{{$dayLog['ip']}}</td>
                            <td>{{$dayLog['count']}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>