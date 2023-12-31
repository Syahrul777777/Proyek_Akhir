<!-- resources/views/produk/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h1>Daftar Produk</h1>

        <a href="<?php echo e(route('produk.create')); ?>" class="btn btn-success mb-3">Tambah Produk Baru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($p->id); ?></td>
                        <td><?php echo e($p->nama_produk); ?></td>
                        <td><?php echo e($p->deskripsi); ?></td>
                        <td><?php echo e($p->harga); ?></td>
                        <td><?php echo e($p->stok); ?></td>
                        <td><?php echo e($p->kategori); ?></td>
                        <td>
                            <a href="<?php echo e(route('produk.show', $p->id)); ?>" class="btn btn-info">Lihat</a>
                            <a href="<?php echo e(route('produk.edit', $p->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('produk.destroy', $p->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Acer\proyek_akhir\resources\views/produk/index.blade.php ENDPATH**/ ?>