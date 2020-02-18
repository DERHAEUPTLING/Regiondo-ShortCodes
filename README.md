# Regiondo Widgets

## shortcodes
Embed Regiondo Widgets with Wordpress Shortcodes.
There are ShortCodes for the regiondo booking widget, the review widget and the voucher widget.

__[regiondo_booking offer="xxxxx"]__
The Booking Widget must be used with the Offer ID.
You will find the offer ID at Regiondo "Manage Offers -> My Offers" as the second line in the SKU column.
The offer ID has 5 digits


__[regiondo_review offer="xxxxx"]__
Reviews will output all Regiondo reviews merged or the ones of the Offer ID´s you entered.
[regiondo_review] => Omitting the offers attribute will give you all available reviews of the given Regiondo account.
[regiondo_review offer="xxxxx"] => Reviews of the offer with the ID "xxxxx"
[regiondo_review offer="xxxxx,yyyyyy,zzzzzz"] => Reviews of all the offers with the IDs "xxxxx", "yyyyy" and "zzzzz".

__[regiondo_voucher]__
The Voucher Widget will check Gift Vouchers and offer checkout if a valid gift voucher code was entered.
Value Vouchers will not be accepted here, but can be entered on checkout after using the booking widget.



## setup
Configure the regiondo intetration like your regiondo domain or the cart button to use the shortcodes with ease.

## about Regiondo
[Regiondo](https://www.google.com) is a Online booking system for tour and activity providers. Easily customize your ticket shop, manage bookings, resources, and accept online payments.