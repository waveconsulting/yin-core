<?php

if (!function_exists('arr_strict')) {
    /**
     * The helper for strict value must be array
     *
     * @param $value
     * @return array
     */
    function arr_strict($value): array
    {
        return is_array($value) ? $value : [$value];
    }
}

if (!function_exists('apply_scope')) {
    /**
     * The helper for apply scope
     *
     * @param string $scope
     * @return array
     */
    function apply_scope(string $scope): array
    {
        return [
            $scope,
            \app($scope)
        ];
    }
}


if (!function_exists('builder_to_sql')) {
    /**
     * The helper for build sql query from builder to string
     *
     * @param $builder
     * @return string
     */
    function builder_to_sql($builder): string
    {
        return vsprintf(str_replace(["?"], ['\'%s\''], $builder->toSql()), $builder->getBindings());
    }
}
