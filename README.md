# Barbas
 PHP Daemon 
 
## Abstract

Barbas the PHP Daemon was started as a proof of concept for an
old project for which a cron job just wasn't the right. The idea
was to create a way to daemon-ize a PHP process.   

With recent changes to PHP optimizing the runtime has allowed 
for this idea to be dusted off.

## State

Barbas is currently in an active development state

## Examples

Within the `examples` folder, there are two folders. First, is a 
simplified usage, and second a classBased daemon.

### Simplified 
The simplified usage where only core functionality exists within
the execute function and the daemonization is done in the file.

### Class Based
The classBased example encapsulates the daemonization into the 
execute functionality. Which is typically more memory intensive, 
especially if used within a framework.

## Docs

### Daemon Structure

#### construct

Accepts two variables sleepTime and timeLimit.

 * sleepTime - default: 600 (ten minutes in seconds) -- the amount 
of time between each execution
 * timeLimit - default: 0 -- the time limit before script times out
 
#### configure
Any prework configuration goes here

#### execute
Location for the scope of work to be done should exist here.

#### Other methods
Developers can implement their own methods to insert other objects 
or set variables for use on the class.

### Usage

Create your own Daemon class by either extending 
`\PHPAlchemist\Barbas\AbstractDaemon` or implementing 
`\PHPAlchemist\Barbas\Contract\DaemonInterface` 
