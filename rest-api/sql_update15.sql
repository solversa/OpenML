UPDATE `task_type` SET contributors = '"Jan van Rijn","Bo Gao","Simon Fischer","Venkatesh Umaashankar","Luis Torgo","Bernd Bischl","Michael Berthold","Bernd Wiswedel","Patrick Winter"' WHERE ttid = 1; 
## correction of name ()

INSERT INTO `task_type` (
`ttid` ,
`name` ,
`description` ,
`creator` ,
`contributors` ,
`date`
)
VALUES (
NULL , 'Supervised Regression', 'Given a dataset with a numeric target and a set of train/test splits, e.g. generated by a cross-validation procedure, train a model and return the predictions of that model.', 'Joaquin Vanschoren', '"Jan van Rijn","Bo Gao","Simon Fischer","Venkatesh Umaashankar","Luis Torgo","Bernd Bischl","Michael Berthold","Bernd Wiswedel","Patrick Winter"', '2013-02-13'
);

INSERT INTO `task_type_data_set` (`ttid`, `name`, `description`, `data_set_id`, `target_feature`) VALUES
(2, 'source_data', 'The source data used to evaluate the model', 'input:1', 'input:2');


INSERT INTO `task_type_estimation_procedure` (`ttid`, `name`, `description`, `type`, `data_splits_url`) VALUES
(2, 'estimation_procedure', 'The evaluation procedure used to evaluate the model', 'input:3', 'input:4');

INSERT INTO `task_type_estimation_procedure_parameter` (`id`, `name`, `value`) VALUES
(2, 'number_folds', 'input:6'),
(2, 'number_repeats', 'input:5'),
(2, 'stratified_sampling', 'true');

INSERT INTO `task_type_evaluation_measures` (`ttid`, `name`, `description`, `value`) VALUES
(2, 'evaluation_measures', 'Optional. A list of evaluation measures to optimize for', 'input:8');


INSERT INTO `task_type_prediction` (`ttid`, `name`, `description`, `format`) VALUES
(2, 'predictions', 'The predictions returned by your implementation.', 'ARFF');


INSERT INTO `task_type_prediction_feature` (`id`, `name`, `type`) VALUES
(2, 'fold', 'integer'),
(2, 'prediction', 'string'),
(2, 'repeat', 'integer'),
(2, 'row_id', 'integer');

INSERT INTO `task` VALUES(6,2);

INSERT INTO `task_values` (`task_id`, `input`, `value`) VALUES
(6, 1, '2221'),
(6, 2, 'class'),
(6, 3, 'cross_validation'),
(6, 4, 'http://expdb.cs.kuleuven.be/expdb/data/splits/cpu_splits_CV_10_2.arff'),
(6, 5, '2'),
(6, 6, '10'),
(6, 8, 'root_mean_squared_error');