# may/18/2019 14:30:22 by RouterOS 6.44.3
# software id = PD7E-JI3I
#
# model = RouterBOARD 750G r3
# serial number = 6F3808F7DD68
/ip dhcp-server
add address-pool=dhcp authoritative=after-2sec-delay disabled=no interface=\
    ether2-master lease-time=1h name=defconf
/ip dhcp-server network
add address=192.168.0.0/22 comment=defconf gateway=192.168.1.252 netmask=22
