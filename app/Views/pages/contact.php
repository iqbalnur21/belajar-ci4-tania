<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">


    <!-- Contact Section -->
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Contact Us</h2>
            <p class="text-muted">
                Kami siap membantu Anda. Silakan hubungi kami melalui informasi
                atau form di bawah ini.
            </p>
        </div>


        <div class="row g-4">

            <!-- Contact Information -->
            <div class="col-md-5">

                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-4">Get In Touch</h4>

                        <!-- Address -->
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="bi bi-geo-alt-fill text-primary fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Alamat</h6>
                                <p class="text-muted mb-0">
                                    Pekanbaru, Riau, Indonesia
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="bi bi-telephone-fill text-primary fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Telepon</h6>
                                <p class="text-muted mb-0">
                                    +62 812-3456-7890
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <i class="bi bi-envelope-fill text-primary fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="text-muted mb-0">
                                    info@mywebsite.com
                                </p>
                            </div>
                        </div>

                        <!-- Opening Hours -->
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="bi bi-clock-fill text-primary fs-3"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Jam Operasional</h6>
                                <p class="text-muted mb-0">
                                    Senin - Jumat<br>
                                    08.00 - 17.00 WIB
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <!-- Contact Form -->
            <div class="col-md-7">

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-4">Kirim Pesan</h4>

                        <form action="" method="POST">

                            <div class="row">

                                <!-- Nama -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">
                                        Nama
                                    </label>

                                    <input type="text"
                                        name="nama"
                                        class="form-control"
                                        placeholder="Masukkan nama"
                                        required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">
                                        Email
                                    </label>

                                    <input type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Masukkan email"
                                        required>
                                </div>

                            </div>


                            <!-- Subject -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Subject
                                </label>

                                <input type="text"
                                    name="subject"
                                    class="form-control"
                                    placeholder="Masukkan subject"
                                    required>
                            </div>


                            <!-- Message -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Pesan
                                </label>

                                <textarea name="pesan"
                                    class="form-control"
                                    rows="5"
                                    placeholder="Tuliskan pesan Anda..."
                                    required></textarea>
                            </div>


                            <!-- Button -->
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-send-fill me-2"></i>
                                Kirim Pesan
                            </button>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <?= $this->endSection(); ?>