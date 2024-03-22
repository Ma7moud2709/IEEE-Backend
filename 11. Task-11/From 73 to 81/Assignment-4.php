<?php
$filters = filter_list();
$filterIds = [];

foreach ($filters as $filter) {
    $filterIds[filter_id($filter)] = $filter;
}

echo "<pre>";
print_r($filterIds);
echo "</pre>";
