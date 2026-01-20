# may/18/2019 14:29:20 by RouterOS 6.44.3
# software id = PD7E-JI3I
#
# model = RouterBOARD 750G r3
# serial number = 6F3808F7DD68
/ip firewall filter
add action=passthrough chain=unused-hs-chain comment=\
    "place hotspot rules here" disabled=yes
add action=accept chain=forward comment="defconf: accept established,related" \
    connection-state=established,related
add action=fasttrack-connection chain=forward comment="defconf: fasttrack" \
    connection-state=established,related
add action=drop chain=forward comment="defconf: drop invalid" \
    connection-state=invalid
add action=drop chain=forward comment=\
    "defconf:  drop all from WAN not DSTNATed" connection-nat-state=!dstnat \
    connection-state=new in-interface=ether1
add action=accept chain=input protocol=icmp
add action=accept chain=input connection-state=established
add action=accept chain=input connection-state=related
add action=drop chain=input disabled=yes in-interface=ether1
/ip firewall nat
add action=dst-nat chain=dstnat comment="Nat-Remote IP Public" dst-address=\
    119.252.166.205 dst-port=8291 protocol=tcp to-addresses=192.168.1.252 \
    to-ports=8291
add action=passthrough chain=unused-hs-chain comment=\
    "place hotspot rules here" disabled=yes
add action=masquerade chain=srcnat comment="defconf: masquerade" \
    out-interface=ether1
add action=masquerade chain=srcnat comment="masquerade hotspot network" \
    src-address=192.168.0.0/22
