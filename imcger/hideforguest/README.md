# phpBB-Hide for Guest

## Description
With "Hide for guest" selected areas are hidden for guests and bots.

## Requirements
- php 5.4.7 or higher
- phpBB 3.2.0 or higher

## Installation
- Copy the extension to `phpBB3/ext/imcger/hideforguest`.
- Go to "ACP" > "Customise" > "Extensions Manager" and enable the "Hide for Guest" extension.

## Update
- Navigate in the ACP to `Customise -> Manage extensions`.
- Click the `Disable` link for Hide for Guest.
- Delete the `hideforguest` folder from `phpBB3/ext/imcger/`.
- Copy the extension to `phpBB3/ext/imcger/hideforguest`.
- Go to "ACP" > "Customise" > "Extensions Manager" and enable the "Hide for Guest" extension.

## Settings
From the ACP, you can customize "Hide for Guest".
Go to "ACP" > "Extensions" > "Hide for Guest settings" and customize "Hide for Guest".
- Hide the newest registered member in the statistics section.
- Hide the statistics area.
- Hide the "Who is online" area.

## Changelog

### v1.1.0 (15-12-2022)
- Fixed don't request disabled POST value
- Changed to TWIG syntax
- Changed PHP max to 8.2
- Added Controller for ACP template
- Added version check
- Added check system requirement

### v1.0.4 (18-03-2022)
- Cleanup code

### v1.0.3 (05-02-2022)
- Fixed bug in JS, `regexp` don't work with Safari

### v1.0.2 (06-01-2022)
- Fixed bug in JS

### v1.0.1 (03-01-2022)
- Minor code change
- Added no break spaces in statistic line
- Added dependencies of radio buttons in ACP settings

### v1.0.0 (01-01-2022)

## Uninstallation
- Navigate in the ACP to `Customise -> Manage extensions`.
- Click the `Disable` link for Hide for Guest.
- To permanently uninstall, click `Delete Data`, then delete the `Hide for Guest` folder from `phpBB3/ext/imcger/`.

## License
**phpBB-Hide for Guest**
[GPLv2](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
