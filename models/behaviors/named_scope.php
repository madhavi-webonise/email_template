<?php
class NamedScopeBehavior extends ModelBehavior {
	static $__settings = array();
	
	function setup(&$model, $settings = array()) {
	  self::$__settings[$model->name] = $settings;
	}
	
	function beforeFind(&$model, $queryData) {
	  $scopes = array();
	  // passed as scopes
    if (!empty($queryData['scopes'])) {
      $scope = !is_array($queryData['scopes']) ? array($queryData['scopes']) : $queryData['scopes'];
      $scopes = am($scopes, $scope);
    }
    
    // passed as conditions['scopes']
    if (is_array($queryData['conditions']) && !empty($queryData['conditions']['scopes'])) {
      $scope = !is_array($queryData['conditions']['scopes']) ? array($queryData['conditions']['scopes']) : $queryData['conditions']['scopes'];
      unset($queryData['conditions']['scopes']);
      $scopes = am($scopes, $scope);
    }

    // if there are scopes defined, we need to get rid of possible condition set earlier by find() method if model->id was set
    if (!empty($scopes) && !empty($model->id) &&  !empty($queryData['conditions']["`{$model->alias}`.`{$model->primaryKey}`"]) && $queryData['conditions']["`{$model->alias}`.`{$model->primaryKey}`"] == $model->id) {
      unset($queryData['conditions']["`{$model->alias}`.`{$model->primaryKey}`"]);
    }
    
    foreach ($this->_conditions($scopes, $model->name) as $condition) {
      $queryData['conditions'][] = $condition;
    }
    
    return $queryData;
	}
	
	function _conditions($scopes = array(), $modelName = '') {
	  if (!is_array($scopes)) {
	    $scopes = array($scopes);
	  }
	  $_conditions = array();
	  foreach ($scopes as $scope) {
      if (strpos($scope, '.')) {
        list($scopeModel, $scope) = explode('.', $scope);
      } else {
        $scopeModel = $modelName;
      }
      if (!empty(self::$__settings[$scopeModel][$scope])) {
        $conditions = self::$__settings[$scopeModel][$scope];
        if (!is_array($conditions)) {
          $conditions = array($conditions);
        }
        foreach ($conditions as $condition) {
          $_conditions[] = $condition;
        }
      }
    }
    
    return $_conditions;
	}
	
	function scopeSql(&$model, $scope) {
	  $db =& ConnectionManager::getDataSource($model->useDbConfig);
    return $db->conditions($this->_conditions($scope, $model->name), false, $model); 
	}
}
?>