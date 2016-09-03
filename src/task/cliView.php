<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace emeraldinspirations\TaskListDemo\task;

/**
 * Description of cliView
 *
 * @author emeraldinspirations
 */
class cliView {
  
  const COLOR_FG_CYAN   = "\033[36m";

  public function output() {
    // 80 char
    /*
     * commit de498738fefb9d15bb13de5462cefbabbaebe827
     * Author: Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
     * Date:   Fri Sep 2 22:50:26 2016 -0500
     * 
     *     Build inital structure
     * ^^^^ - 4
     * Indicator 1:
     * -------------------------------------------------------------------------
     * Task                 *               White
     * My Task              >               Green
     * 
     * Indicator 2:
     * -------------------------------------------------------------------------
     * Modified (By Others) !               Red
     * Modified (By Others) .               Green
     * 
     * SHA1:
     * -------------------------------------------------------------------------
     * CRU (Most Recent)    6               Green
     * CRU                  6               Yellow
     * Deleted              6               Strike / Muted / Yellow
     * (Expired)            6               Red
     * 
     * 
     * Element Name:        Chars:  Total:  Color:
     * =========================================================================
     * Indicator 1  (I)     1       1       Various
     * Whitespace   (^)     1       2       N/A
     * SHA1         (S)     7       9       Yellow
     * Indicator 2  (i)     1       10      Various
     * Title        (T)     56/59   66/69   White
     * Elipsis      (.)     3       69      White
     * Whitespace   (^)     1       70      N/A
     * Mod Date     (D)     10      80      Sky-Blue
     * 
     */
  }
  
  const MYSQL_DATE_FORMAT = 'Y-m-d H:i:s';
  
  static function renderModDate(
          taskModel $vTask,
          $vColor = self::COLOR_FG_CYAN,
          $vDateFormat = 'Y-m-d') {
    
    $pDate = \DateTime::createFromFormat(
            self::MYSQL_DATE_FORMAT, $vTask->UpdatedDate);
    return $vColor.$pDate->format($vDateFormat);
  }
  
}
