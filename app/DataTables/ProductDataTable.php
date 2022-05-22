<?php

namespace App\DataTables;

use App\Models\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('price', function (Product $product) {
                return '<div class="text-right">'. fmt_rupiah($product->price) .'</div>';
            })
            ->addColumn('category_id', function (Product $product) {
                return $product->category->name;
            })
            ->addColumn('image', function (Product $product) {
                return '<img src="'.$product->getFirstMediaUrl("product-image").'" width="120px">';
            })
            ->rawColumns(['description', 'price', 'image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Product $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Product $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('product-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"top"f>rt<"bottom"lp><"clear">')
                    ->orderBy(1)
                    ->buttons([]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name')->width(100),
            Column::make('price')->width(100),
            Column::make('category_id')->title('Category'),
            Column::make('description'),
            Column::make('image')->title('Product Image'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Product_' . date('YmdHis');
    }
}
