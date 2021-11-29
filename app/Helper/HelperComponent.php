<?php
namespace App\Helper;

class HelperComponent {

    public static function SideBar(){
        return [

                [
                    "single_link" => setSingleLink( "Dashboard","home",null,"/home"),
                ],

                [
                    "heading"=>"Management",
                    'v-can'=>'management-view',
                    "menu"=>[
                        "title"=>'User Management',
                        "icon"=>"user",
                        "sub_menu"=>[
                            setSubMenu(
                              "Users",
                               null,
                               "users-view",
                               "/user"
                            ),
                            setSubMenu(
                               "Roles",
                                null,
                                "roles-view",
                                "/roles"
                            ),
                            setSubMenu(
                                "Permissions",
                                null,
                                "permissions-view",
                                "/permissions"
                              )
                        ]

                    ],

                ],



                // [
                //     "single_link" => setSingleLink("Applications", "file-text", null, "/customer/applications"),
                // ],
                // [
                //     "single_link" => setSingleLink( "Approved Apps","file-text",null,"/assigned/apps"),
                // ],
                // [
                //     "single_link" => setSingleLink( "My Apps","file-text",null,"/my/apps"),
                // ],
                // [
                //     "single_link" => setSingleLink( "Assign App","file-text",null,"/assign/apps"),
                // ],
                // [
                //     "single_link" => setSingleLink("Logout","arrow",null,"logout"),
                // ],
                [
                    "single_link" => setSingleLink( "Notify","bell","notify-view","/send/notify"),
                ],

                // [
                //     "single_link" => setSingleLink("Logs", "bullseye", null, "/logs/activities"),
                // ],



     ];
    }
}
