<?php
/**
 * Table Definition for log_civicrm_value_participant_data_6
 */
require_once 'DB/DataObject.php';

class Log_civicrm_value_participant_data_6 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_value_participant_data_6';    // table name
    public $id;                             // int(4) unsigned
    public $entity_id;                      // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $tee_shirt_size_18;              // varchar(8)
    public $picture_57;                     // int(4) unsigned
    public $name_of_nominator_s__58;        // varchar(255)
    public $relationship_of_nominator_s_to_n_59;   // varchar(255)
    public $how_long_has_the_nominee_been_in_60;   // varchar(255)
    public $how_many_national_tournaments_ha_61;   // int(4)
    public $how_many_years_has_the_nominee_b_62;   // int(4)
    public $which_games_does_the_nominee_nor_63;   // varchar(255)
    public $which_national_championships_has_64;   // varchar(4000)
    public $please_explain_examples_of_educa_65;   // text
    public $please_relate_an_anecdotal_acade_66;   // text
    public $please_make_any_other_comments_t_67;   // text
    public $at_what_age_levels_does_the_nomi_68;   // varchar(60)
    public $what_successes_locally_and_natio_69;   // varchar(4000)
    public $which_games_does_the_nominee_nor_70;   // varchar(255)
    public $what_success_locally_and_nationa_71;   // text
    public $which_national_championships_has_72;   // text
    public $housing_group_73;               // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
