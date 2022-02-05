# phpBB-Hide for Guest

## Description
With "Hide for guest" selected areas are hidden for guests and bots.

## Requirements
- php 7.3 or higher
- phpBB 3.2.0 or higher

## Installation
Copy the extension to `phpBB3/ext/imcger/hideforguest`
Go to "ACP" > "Customise" > "Extensions Manager" and enable the "Hide for Guest" extension.

## Settings
From the ACP, you can customize "Hide for Guest".
Go to "ACP" > "Extensions" > "Hide for Guest settings" and customize "Hide for Guest".
- Hide the newest registered member in the statistics section.
- Hide the statistics area.
- Hide the "Who is online" area.

## Changelog

### v1.0.3 (05-02-2022)
- Bug in JS, `regexp` don't work in iPhone Safari

### v1.0.2 (06-01-2022)
- Bug in JS

### v1.0.1 (03-01-2022)
- minor code change
- Add no break spaces in statistic line
- Add dependencies of radio buttons in ACP settings

### v1.0.0 (01-01-2022)

## Uninstallation
- Navigate in the ACP to `Customise -> Manage extensions`.
- Click the `Disable` link for Hide for Guest.
- To permanently uninstall, click `Delete Data`, then delete the `Hide for Guest` folder from `phpBB3/ext/imcger/`.

## License
**phpBB-Hide for Guest**
[GPLv2](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
