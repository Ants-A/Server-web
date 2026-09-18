<?php

class Task 
{
  public function job(Logger $logger)
  {
    for($i = 0; $i<10; $i++)
    {
      $logger->log("Job $i was done!");
    }
  }
}

class ConsoleLogger implements Logger
{
  public function log($message)
  {
    echo "$message\n";
  }
}

class NothingLogger implements Logger
{
  public function log($message)
  {
    echo "nuh uh\n";
  }
}

interface Logger 
{
  public function log($message);
}


$logger = new NothingLogger();
$task = new Task();
$task->job($logger);
