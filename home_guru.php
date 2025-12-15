<?php
session_start();
include "dbcon.php";

/* ambil data feedback */
$feedback = $conn->query("
    SELECT f.id, u.firstname, u.lastname, 
           f.jawaban1, f.jawaban2, f.jawaban3, f.jawaban4, f.jawaban5
    FROM feedback f
    JOIN users u ON f.siswa_id = u.id
    ORDER BY f.id DESC
");

/* ambil data submissions */
$submissions = $conn->query("
    SELECT s.id, u.firstname, u.lastname, s.score,
           s.jawaban1, s.jawaban2, s.jawaban3, s.jawaban4, s.jawaban5
    FROM submissions s
    JOIN users u ON s.siswa_id = u.id
    ORDER BY s.id DESC
");

/* ambil data submit_perencanaan */
$submit_perencanaan = $conn->query("
    SELECT s.id, u.firstname, u.lastname,
           s.jawaban1, s.jawaban2, s.jawaban3, s.jawaban4, s.jawaban5, s.jawaban6, s.jawaban7, s.jawaban8, s.jawaban9, s.jawaban10,
           s.jawaban11, s.jawaban12, s.jawaban13, s.jawaban14, s.jawaban15,
           s.jawaban16, s.jawaban17, s.jawaban18
    FROM submit_perencanaan s
    JOIN users u ON s.siswa_id = u.id
    ORDER BY s.id DESC
");

/* ambil data submit_eksperimen */
$submit_eksperimen = $conn->query("
    SELECT s.id, u.firstname, u.lastname, s.f1, s.t1, s.l1, s.v1, s.f2, s.t2, s.l2, s.v2, s.f3, s.t3, s.l3, s.v3
    FROM submit_eksperimen s
    JOIN users u ON s.siswa_id = u.id
    ORDER BY s.id DESC
");

/* ambil data submit_solusi */
$submit_solusi = $conn->query("
    SELECT s.id, u.firstname, u.lastname, s.q1a, s.q1b, s.q1c, s.q2a, s.q2b, s.q3a, s.q3b, s.q4a, s.q4b, s.g1, s.g2, s.g3
    FROM submit_solusi s
    JOIN users u ON s.siswa_id = u.id
    ORDER BY s.id DESC
");

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Guru - WaveUp</title>
    <link rel="stylesheet" href="style-global.css">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
            table-layout: auto;
        }

        th,
        td {
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 10px;
            text-align: left;
        }

        th {
            background: rgba(0, 200, 255, 0.15);
        }

        tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.03);
        }

        h2 {
            margin-top: 40px;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="home_guru.php">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT ME</a></li>
                <li><a href="index.html">LOG OUT</a></li>
            </ul>
        </nav>
    </header>

    <section style="flex:1; padding:30px; max-width:1200px; margin:auto;">

        <!-- ================= FEEDBACK ================= -->
        <h2>Feedback Siswa</h2>
        <br>
        <div class="card">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Jawaban 1</th>
                    <th>Jawaban 2</th>
                    <th>Jawaban 3</th>
                    <th>Jawaban 4</th>
                    <th>Jawaban 5</th>
                </tr>
                <?php while ($row = $feedback->fetch_assoc()): ?>
                    <tr>

                        <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>
                        <td><?= htmlspecialchars($row['jawaban1']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban2']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban3']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban4']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban5']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <!-- ================= SUBMISSIONS ================= -->
        <h2>Submission Kuis</h2>
        <br>
        <div class="card">
            <table width="100%">
                <tr>
                    <th>Nama Siswa</th>
                    <th>Skor</th>
                    <th>Jawaban 1</th>
                    <th>Jawaban 2</th>
                    <th>Jawaban 3</th>
                    <th>Jawaban 4</th>
                    <th>Jawaban 5</th>
                </tr>
                <?php while ($row = $submissions->fetch_assoc()): ?>
                    <tr>

                        <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>
                        <td><?= htmlspecialchars($row['score']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban1']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban2']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban3']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban4']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban5']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <!-- ================= Perencanaan ================= -->
        <h2>Submission Perencanaan</h2>
        <br>
        <div class="card" style="max-height: 450px; overflow-x: auto; overflow-y: auto;">
            <table width="100%">
                <tr>
                    <th>Nama Siswa</th>
                    <th>Jawaban 1</th>
                    <th>Jawaban 2</th>
                    <th>Jawaban 3</th>
                    <th>Jawaban 4</th>
                    <th>Jawaban 5</th>
                    <th>Jawaban 6</th>
                    <th>Jawaban 7</th>
                    <th>Jawaban 8</th>
                    <th>Jawaban 9</th>
                    <th>Jawaban 10</th>
                    <th>Jawaban 11</th>
                    <th>Jawaban 12</th>
                    <th>Jawaban 13</th>
                    <th>Jawaban 14</th>
                    <th>Jawaban 15</th>
                    <th>Jawaban 16</th>
                    <th>Jawaban 17</th>
                    <th>Jawaban 18</th>
                </tr>
                <?php while ($row = $submit_perencanaan->fetch_assoc()): ?>
                    <tr>

                        <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>
                        <td><?= htmlspecialchars($row['jawaban1']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban2']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban3']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban4']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban5']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban6']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban7']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban8']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban9']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban10']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban11']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban12']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban13']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban14']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban15']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban16']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban17']) ?></td>
                        <td><?= htmlspecialchars($row['jawaban18']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <!-- ================= Eksperimen ================= -->
        <h2>Submission Eksperimen</h2>
        <br>
        <div class="card" style="overflow-x:auto;">
            <table width="100%">
                <tr>
                    <th>Nama Siswa</th>
                    <th>f1</th>
                    <th>l1</th>
                    <th>t1</th>
                    <!-- <th>v1</th> -->
                    <th>f2</th>
                    <th>l2</th>
                    <th>t2</th>
                    <!-- <th>v2</th> -->
                    <th>f3</th>
                    <th>l3</th>
                    <th>t3</th>
                    <!-- <th>v3</th> -->
                </tr>
                <?php while ($row = $submit_eksperimen->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>

                        <td><?= htmlspecialchars($row['f1']) ?></td>
                        <td><?= htmlspecialchars($row['l1']) ?></td>
                        <td><?= htmlspecialchars($row['t1']) ?></td>
                        <!-- <td><?= htmlspecialchars($row['v1']) ?></td> -->

                        <td><?= htmlspecialchars($row['f2']) ?></td>
                        <td><?= htmlspecialchars($row['l2']) ?></td>
                        <td><?= htmlspecialchars($row['t2']) ?></td>
                        <!-- <td><?= htmlspecialchars($row['v2']) ?></td> -->

                        <td><?= htmlspecialchars($row['f3']) ?></td>
                        <td><?= htmlspecialchars($row['l3']) ?></td>
                        <td><?= htmlspecialchars($row['t3']) ?></td>
                        <!-- <td><?= htmlspecialchars($row['v3']) ?></td> -->
                    </tr>
                <?php endwhile; ?>

            </table>
        </div>

        <!-- ================= Solusi ================= -->
        <h2>Submission Solusi</h2>
        <br>
        <div class="card" style="overflow-x:auto;">
            <table width="100%">
                <tr>
                    <th>Nama Siswa</th>
                    <th>q1a</th>
                    <th>q1b</th>
                    <th>q1c</th>
                    <!-- <th>v1</th> -->
                    <th>q2a</th>
                    <th>q2b</th>
                    <th>q3a</th>
                    <!-- <th>v2</th> -->
                    <th>q3b</th>
                    <th>q4a</th>
                    <th>q4b</th>
                    <th>g1</th>
                    <th>g2</th>
                    <th>g3</th>
                    <!-- <th>v3</th> -->
                </tr>
                <?php while ($row = $submit_solusi->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['firstname'] . " " . $row['lastname'] ?></td>

                        <td><?= htmlspecialchars($row['q1a']) ?></td>
                        <td><?= htmlspecialchars($row['q1b']) ?></td>
                        <td><?= htmlspecialchars($row['q1c']) ?></td>
                        <!-- <td><?= htmlspecialchars($row['v1']) ?></td> -->

                        <td><?= htmlspecialchars($row['q2a']) ?></td>
                        <td><?= htmlspecialchars($row['q2b']) ?></td>
                        <td><?= htmlspecialchars($row['q3a']) ?></td>
                        <!-- <td><?= htmlspecialchars($row['v2']) ?></td> -->

                        <td><?= htmlspecialchars($row['q3b']) ?></td>
                        <td><?= htmlspecialchars($row['q4a']) ?></td>
                        <td><?= htmlspecialchars($row['q4b']) ?></td>

                        <td><?= htmlspecialchars($row['g1']) ?></td>
                        <td><?= htmlspecialchars($row['g2']) ?></td>
                        <td><?= htmlspecialchars($row['g3']) ?></td>
                        <!-- <td><?= htmlspecialchars($row['v3']) ?></td> -->
                    </tr>
                <?php endwhile; ?>

            </table>
        </div>

    </section>

    <footer>
        &copy; 2025 Platform Pembelajaran Fisika
    </footer>

    <script>
        function showText() {
            document.getElementById("image-text").innerText = "Ayo mulai misinya, Agen!";
        }
    </script>

</body>

</html>