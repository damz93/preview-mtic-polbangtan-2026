# may/18/2019 14:29:04 by RouterOS 6.44.3
# software id = PD7E-JI3I
#
# model = RouterBOARD 750G r3
# serial number = 6F3808F7DD68
/ip address
add address=192.168.1.1/23 comment=defconf disabled=yes interface=\
    ether2-master network=192.168.0.0
add address=119.252.166.205/29 interface=ether1 network=119.252.166.200
add address=192.168.1.252/22 comment="hotspot network" interface=\
    ether2-master network=192.168.0.0
add address=192.168.1.2/24 disabled=yes interface=ether1 network=192.168.1.0
add address=119.252.166.202/29 disabled=yes interface=ether1 network=\
    119.252.166.200
