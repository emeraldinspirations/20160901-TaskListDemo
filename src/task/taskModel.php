<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace emeraldinspirations\TaskListDemo\task;

/**
 * Description of task
 *
 * @author emeraldinspirations
 */
class taskModel {
  public $ID;
  public $RevisionID;       //40 char
  public $ParentRevisionID; //40 char
  public $Status;           //Created|Updated|Deleted|Locked
  public $Title;
  public $UpdatedBy;
  public $UpdatedDate;
  
  //isOrigin = (ParentRevID == NULL)
  /*
   *  SELECT
   *    initalTask.ID,
   *    initalTask.UpdatedBy as CreatedBy
   *    currentTask.RevisionID,
   *    currentTask.ParentRevisionID,
   *    currentTask.Status,
   *    currentTask.Title,
   *    currentTask.UpdatedBy,
   *    currentTask.UpdatedDate
   *  FROM
   *    task AS initalTask
   *  LEFT JOIN
   *    (
   *      SELECT
   *        RevisionID,
   *        ParentRevisionID,
   *        Status,
   *        Title,
   *        UpdatedBy,
   *        MAX(UpdatedDate) AS UpdatedDate
   *      FROM
   *        task
   *      GROUP BY
   *        ID
   *    ) AS currentTask
   */
}
