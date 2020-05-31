# Text-Speak-demo using symfony console component 
Write your Text, Text Will Speak it 

1.Clone repository

```
git clone https://github.com/erakashpatel/Text-Speak-demo.git
```

2.Update composer

```
composer update
```

3.Run php demo 
Input : 
```
./demo 
```
OR 
```
php ./demo
```
Output : 
```
Speak demo Version 1

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  help   Displays help for a command
  list   Lists commands
  speak  Speak a message.

```

4.Run Speak command : Mic Speak "Hello World." default.

Input : 
```
./demo speak
```
OR 
```
php ./demo speak

```
Output : 
```
Simple message display.
Sucess message display.
Error message display.
```

5.Run Speak command with Argument : Mic Speak "Hey I am here.Overwrite."

Input : 
```
./demo speak "Hey I am here.Overwrite."
```
OR 
```
php ./demo speak "Hey I am here.Overwrite."
```

Output : 
```
Simple message display.
Sucess message display.
Error message display.
```


Thanks

