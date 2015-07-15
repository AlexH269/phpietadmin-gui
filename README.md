# phpietadmin
Phpietadmin is an easy to use webinterface to control the iet daemon (http://sourceforge.net/projects/iscsitarget/) written in php and javascript.

## Intention
The main reason for developing this was, to create a way to configure the daemon while it’s in use. The iet daemon reads
the config file only at start/restart. Changes after the daemon was started are only possible via the ietadm command line
tool. This tool alters the configuration of the daemon while it’s running. Unfortunatly, the changes are not reflected
in the config file itself. Which means, if the daemon gets restart the changes made via ietadm are gone, because the
daemons loads only the targets from the config file. Phpietadmin saves all changes in the config file and passes them
directly to the daemon via php’s „exec“ function. This prevents any inconsistency between the config file and the
daemon live config.

## Compatibility
Phpietadmin is tested on Debian 7 and 8. But it’s not limited to Debian.
It should run just fine on any other linux distribution.

## Docs
* https://github.com/MrCrankHank/phpietadmin/wiki/Installation-v04
* https://github.com/MrCrankHank/phpietadmin/wiki/Update-v03-to-v04

## Screens
https://github.com/MrCrankHank/phpietadmin/wiki/Screens-v02

## Features
Take a look at the github releases for detailed information about the features.

## ToDo
- [ ] Handle "Device or resource busy" error when trying to delete a target in use (Don't display targets in use for deletion)
- [ ] Software raid status
- [ ] Support for HA Clusters (Corosync & Pacemaker) <-- hard one
- [ ] Support for DRBD
- [ ] Support for samba shares
- [ ] Show and configure network settings
- [ ] Enable/Disable features
- [ ] Delete lun: Display if target is in use
- [ ] Don't display targets in use for permission deletion
- [ ] Lvm snapshots
- [ ] Exclude volume group
- [ ] Support for nfs
- [ ] Support for apcupsd
- [ ] Add lvextend, lvremove, lvrename features
- [ ] Support for live resizing of targets (with workaround, since iet doesn't support)
- [ ] Manual selection of block devices (input menu already implemented, but logic is missing)
- [ ] HDD temp
- [ ] Smart data
- [ ] Volume group menu (select which volume groups phpietadmin should use)
- [x] Save session data in database
    - [x] Check if user 'admin' is already logged in
- [x] Delete session cookie when logging off
- [ ] Config option for production and development
    * Production:
        * minifized html and javascript generated at the relase will be used
    * Development
        * normal versions will be used
- [ ] Login/Logout logging
- [ ] Prevent comments from being deleted, when editing a config file
- [ ] Backup config files
- [ ] Menu to restore config files
- [ ] Action logging
- [ ] Document already written methods
- [ ] Pie Chart for volume groups
- [ ] Config -> MISC -> Idle, no zeros
- [ ] Own model for exec's

## Planned features and todo
In version 0.5:
- [x] Iet settings configuration menu
- [x] Shutdown/reboot via gui (Add client side validation, Prevent link from being directly pressed)
    - [x] Check via sweetalert, shutdown/reboot server only if post var isset
- [x] Add delete button to sessions
- [x] Delete target: Checkbox to force deletion, even if in use (Disconnect initiator and delete target)
- [ ] Add up2date documentation & screenshots
- [x] Rework service tab
    - [x] Add other services
    - [x] Enable services with checkbox
- [x] Set sudoer permission for service execution
- [x] Create connection controller
    - [x] Add server not reachable message if connection fails
    - [x] Check service/services running
    - [x] Check session expired
    - [x] Disable apache access logging for this controller (http://stackoverflow.com/questions/10002289/prevent-stop-apache-from-logging-specific-ajax-xmlhttprequests)
- [x] Add glyphicons Targets > Add/delete discovery user, Services -> overview, add
- [x] addslashes for every user input
- [x] htmlspecialchars for every echo
- [x] Correct some ugly markup
- [x] Targets/Configure/Delete ACL add checkboxes for orphans

Items are completely random ;-)

If you have any problems, please open an issue!