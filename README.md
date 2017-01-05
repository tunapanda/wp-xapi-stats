# wp-xapi-stats
Get statistics from an xAPI LRS and display in the wordpress admin panel.

This plugin is intended to work like this:

* It is possible to define a number of reports. A report is a WordPress custom post type.
* When a report is shown, the rows of the report is always the users from the WordPress system where the plugin is running.
* For each report, it is possible to define a number of columns.
* The column definition says what data should be taken into consideration in order to calculate the values for the cells in the olumn, and how the value should be calculated.
* For each column, it is possible to define a filter specifying which statements that should be taken into consideration for this column. When defining the filter, the following parameters can be specified:
  * `verb` - Specify an xAPI verb, such as completed of attempted.
  * `object` - Specify an xAPI object.
  * `minScore` - Only consider statements with a score equal to or greater than this value.
  * `maxScore` - Only consider statements with a score equal to or lower than this value.
  * `since` - Only consider statements newer than the specified date.
  * `age` - Only consider statements newer than a certain age (expressed in days).
* For each column, it is possible to specify to define the _agregate field_, i.e. which value from the filtered statements that should be used for display. Possible values are:
  * `stored` - The time when the statement is stored.
  * `timestamp` - Use the timestamp from the statement.
  * `score` - Use the score from the statement.
* Also for each column, it is possible to define an _agregate type_. The agregate type says how the filtered values should be combined. Possible values:
  * `count` - Count the number of statements.
  * `min` - Show the value from the statement with the lowest value for the agregate field.
  * `max` - Show the value from the statement with the highest value for the agregate field.
  * `avg`- Calculate the average of the values of the agregate field.
* The created reports can be viewed in the WordPress admin.
* There will be a shortcode that can be used to put a report on a frontend facing page (i.e. outside the admin).
* The current data from a report can be exported as a CSV file.
* It is possible to say that a certaing column should be exported as a data value that can be consumed by [wp-data-kpis](https://github.com/tunapanda/wp-data-kpis/).
