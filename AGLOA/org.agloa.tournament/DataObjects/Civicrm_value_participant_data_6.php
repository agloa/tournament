<?php
/**
 * Table Definition for civicrm_value_participant_data_6
 */
require_once 'DB/DataObject.php';

class Civicrm_value_participant_data_6 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_value_participant_data_6';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_id;                      // int(4) unique_key not_null unsigned
    public $tee_shirt_size_18;              // varchar(8)
    public $picture_57;                     // int(4) unsigned
    public $name_of_nominator_s__58;        // varchar(255)
    public $relationship_of_nominator_s_to_n_59;   // varchar(255)
    public $how_many_national_tournaments_ha_61;   // int(4)
    public $how_many_years_has_the_nominee_b_62;   // int(4)
    public $please_explain_examples_of_educa_65;   // text
    public $please_relate_an_anecdotal_acade_66;   // text
    public $please_make_any_other_comments_t_67;   // text
    public $at_what_age_levels_does_the_nomi_68;   // varchar(60)
    public $which_games_does_the_nominee_nor_70;   // varchar(255)
    public $what_success_locally_and_nationa_71;   // text
    public $which_national_championships_has_72;   // text
    public $housing_group_73;               // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
