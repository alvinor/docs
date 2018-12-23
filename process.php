```php
<?php
/**
 * 连接服务器处理广播中的请求
 *
 * @author duxin
 */
set_time_limit(0);

define('DAEMONIZE', true);
define('REDIS_HOST', '118.190.205.103');
define('REDIS_PORT', 6379);
define('REDIS_AUTH', '!@#qweASD2017');
define('REDIS_HOST2', '121.43.231.113');
define('REDIS_PORT2', 6379);
define('REDIS_AUTH2', 'winner!@#456,./<>?');

define('PID_FILE', '/var/run/wlxs_proxy_receive.pid');

if (php_sapi_name() != "cli") {
    die("Only run in command line mode\n");
}

if (DAEMONIZE) {
    cli_set_process_title('wlxs_proxy_receive');
    $handle = fopen(PID_FILE, 'r');
    $pid  = trim(fgets($handle));
    fclose($handle);

    if ($argc < 2) {
        $action = 'start';
    } else {
        $action = $argv[1];
    }

    if ($action == 'stop') {
        if ($pid) {
            exec('ps p ' . $pid, $tmp);
            if (count($tmp) > 1) {
                $rst = posix_kill($pid, 9);
                fwrite(STDOUT, 'Process is killed ' . $pid . "\n");
            }else{
                fwrite(STDOUT, 'Pid is not exists: ' . $pid . "\n");
            }
            $handle = fopen(PID_FILE, 'w');
            fclose($handle);
            exit();
        } else {
            fwrite(STDOUT, "Process is not exists\n");
        }
    } else {
        if ($pid) {
            exec('ps p ' . $pid, $tmp);
            $next=0;
            if (count($tmp) > 1) {
                fwrite(STDOUT, "This Process is runing[{pid}],please input 1 [skip and exit] ,or 2 [kill and start again] ,default 1: ");
                $next = trim(fgets(STDIN));

                if ($next == 2) {
                    posix_kill($pid, 9);
                }else{
                    fwrite(STDOUT, 'Process is running ' . $pid . "[not restart!]\n");
                    exit();
                }
            }
        }
        // get input
    }

    $pid = pcntl_fork();
    if (- 1 === $pid) {
        throw new Exception('fork fail');
    } elseif ($pid > 0) {
        exit(0);
    }
    if (- 1 === posix_setsid()) {
        throw new Exception("setsid fail");
    }
    // Fork again avoid SVR4 system regain the control of terminal.
    $pid = pcntl_fork();
    if (- 1 === $pid) {
        throw new Exception("fork fail");
    } elseif (0 !== $pid) {
        exit(0);
    }
    $handle = fopen(PID_FILE, 'w');
    fwrite($handle, posix_getpid());
    fclose($handle);
    fwrite(STDOUT, 'Process is running ' . posix_getpid() . "\n");
}

$redis = new \Redis();
$redis->pconnect(REDIS_HOST, REDIS_PORT, 0);
$redis->auth(REDIS_AUTH);
$redis->setOption(\Redis::OPT_READ_TIMEOUT, - 1);

$redis2 = new \Redis();
$redis2->pconnect(REDIS_HOST2, REDIS_PORT2, 0);
$redis2->auth(REDIS_AUTH2);
$redis2->setOption(\Redis::OPT_READ_TIMEOUT, - 1);

$redis2->subscribe([
    'broadcastOrder',
    'deviceServer','deviceMonitor','deviceCommand','deviceStatus'
], function ($i, $channel, $message) use ($redis) {
    switch ($channel) {
        case 'broadcastOrder':
            $redis->publish('broadcastOrder',$message);
            break;
        default:
[root@iZ28izp3oirZ pwlxs]# cat  proxy_receive.php 
#!/usr/bin/php
<?php
/**
 * 连接服务器处理广播中的请求
 *
 * @author duxin
 */
set_time_limit(0);

define('DAEMONIZE', true);
define('REDIS_HOST', '118.190.205.103');
define('REDIS_PORT', 6379);
define('REDIS_AUTH', '!@#qweASD2017');
define('REDIS_HOST2', '121.43.231.113');
define('REDIS_PORT2', 6379);
define('REDIS_AUTH2', 'winner!@#456,./<>?');

define('PID_FILE', '/var/run/wlxs_proxy_receive.pid');

if (php_sapi_name() != "cli") {
    die("Only run in command line mode\n");
}

if (DAEMONIZE) {
    cli_set_process_title('wlxs_proxy_receive');
    $handle = fopen(PID_FILE, 'r');
    $pid  = trim(fgets($handle));
    fclose($handle);
    
    if ($argc < 2) {
        $action = 'start';
    } else {
        $action = $argv[1];
    }
    
    if ($action == 'stop') {
        if ($pid) {
            exec('ps p ' . $pid, $tmp);
            if (count($tmp) > 1) {
                $rst = posix_kill($pid, 9);
                fwrite(STDOUT, 'Process is killed ' . $pid . "\n");
            }else{
                fwrite(STDOUT, 'Pid is not exists: ' . $pid . "\n");
            }
            $handle = fopen(PID_FILE, 'w');
            fclose($handle);
            exit();
        } else {
            fwrite(STDOUT, "Process is not exists\n");
        }
    } else {
        if ($pid) {
            exec('ps p ' . $pid, $tmp);
            $next=0;
            if (count($tmp) > 1) {
                fwrite(STDOUT, "This Process is runing[{pid}],please input 1 [skip and exit] ,or 2 [kill and start again] ,default 1: ");
                $next = trim(fgets(STDIN));
            
                if ($next == 2) {
                    posix_kill($pid, 9);
                }else{
                    fwrite(STDOUT, 'Process is running ' . $pid . "[not restart!]\n");
                    exit();
                }
            }
        }
        // get input
    }
    
    $pid = pcntl_fork();
    if (- 1 === $pid) {
        throw new Exception('fork fail');
    } elseif ($pid > 0) {
        exit(0);
    }
    if (- 1 === posix_setsid()) {
        throw new Exception("setsid fail");
    }
    // Fork again avoid SVR4 system regain the control of terminal.
    $pid = pcntl_fork();
    if (- 1 === $pid) {
        throw new Exception("fork fail");
    } elseif (0 !== $pid) {
        exit(0);
    }
    $handle = fopen(PID_FILE, 'w');
    fwrite($handle, posix_getpid());
    fclose($handle);
    fwrite(STDOUT, 'Process is running ' . posix_getpid() . "\n");
}

$redis = new \Redis();
$redis->pconnect(REDIS_HOST, REDIS_PORT, 0);
$redis->auth(REDIS_AUTH);
$redis->setOption(\Redis::OPT_READ_TIMEOUT, - 1);

$redis2 = new \Redis();
$redis2->pconnect(REDIS_HOST2, REDIS_PORT2, 0);
$redis2->auth(REDIS_AUTH2);
$redis2->setOption(\Redis::OPT_READ_TIMEOUT, - 1);

$redis2->subscribe([
    'broadcastOrder',
    'deviceServer','deviceMonitor','deviceCommand','deviceStatus'
], function ($i, $channel, $message) use ($redis) {
    switch ($channel) {
        case 'broadcastOrder':
            $redis->publish('broadcastOrder',$message);
            break;
        default:
            $redis->publish($channel,$message);
            break;
    }
});
```
