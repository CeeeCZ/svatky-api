<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class LogViewController extends Controller
{
    public function showLogs()
    {
        $logFile = file(storage_path().'/logs/routeMonitor.log');
        $logCollection = [];

        foreach ($logFile as $line_num => $line) {
            preg_match_all("/\[([^\]]*)\ /", $line, $times);
            preg_match("/(?<=URL: )(.*)(?=\| from)/", $line, $uris);
            preg_match("/(?<=from: )(.*)(?=\| IP)/", $line, $from);
            preg_match("/(?<=IP: )(.*)/", $line, $ip);

            $logCollection[] = [
                'line' => $line_num,
                'time' => $times[1][0],
                'uri' => $uris[0],
                'from' => $from[0],
                'ip' => $ip[0],
                'count' => 1
            ];
        }

        $sumLog = [];

        foreach ($logCollection as $log) {
            if (count($sumLog) === 0){
                $sumLog[$log['time']] = [$log];
                continue;
            }

            if (array_key_exists($log['time'], $sumLog)) {
                $i = 0;

                foreach ($sumLog[$log['time']] as $key => $loggedTime) {
                    if ($loggedTime['from'] === $log['from']) {
                        $sumLog[$log['time']][$key]['count'] = $loggedTime['count'] + 1;

                        break;
                    }
                    $i++;

                    if (count($sumLog[$log['time']]) === $i) {
                         $sumLog[$log['time']][] = $log;
                    }
                }
            } else {
                $sumLog[$log['time']] = [$log];
            }
        }

        return view('logs', ['logs' => $sumLog]);
    }
}