<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Athlète - Performance Tracking</title>
    <style>
        :root {
            /* Couleurs */
            --primary: #e74c3c;
            --secondary: #3498db;
            --dark: #2c3e50;
            --light: #ecf0f1;
            --accent: #1abc9c;
            --success: #2ecc71;
            --warning: #f39c12;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .athlete-header {
            background: linear-gradient(135deg, var(--dark), var(--secondary));
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .athlete-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            background-color: #ddd;
        }
        
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .stats-title {
            color: var(--dark);
            margin-top: 0;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--accent);
            display: flex;
            align-items: center;
        }
        
        .stats-title .icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            margin-right: 10px;
            background-color: var(--primary);
            border-radius: 50%;
            position: relative;
        }
        
        .stats-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }
        
        .stats-table th {
            background-color: var(--secondary);
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        .stats-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }
        
        .stats-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .stats-table tr:hover {
            background-color: #e9f7fe;
        }
        
        .card-table {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .performance-card {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 4px solid var(--primary);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .card-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary);
        }
        
        .minimal-table {
            width: 100%;
            border: none;
        }
        
        .minimal-table th {
            text-align: left;
            padding: 12px 5px;
            border-bottom: 2px solid var(--dark);
            color: var(--dark);
        }
        
        .minimal-table td {
            padding: 12px 5px;
            border-bottom: 1px solid #eee;
        }
        
        .icon-table td:first-child {
            display: flex;
            align-items: center;
        }
        
        .icon-table .icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            background-color: var(--secondary);
            border-radius: 50%;
        }
        
        .color-table tr:nth-child(4n+1) td {
            background-color: rgba(52, 152, 219, 0.1);
        }
        
        .color-table tr:nth-child(4n+2) td {
            background-color: rgba(46, 204, 113, 0.1);
        }
        
        .color-table tr:nth-child(4n+3) td {
            background-color: rgba(241, 196, 15, 0.1);
        }
        
        .color-table tr:nth-child(4n+4) td {
            background-color: rgba(155, 89, 182, 0.1);
        }
        
        .progress-container {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 20px;
            height: 20px;
            margin: 5px 0;
        }
        
        .progress-bar {
            height: 100%;
            border-radius: 20px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            position: relative;
            transition: width 0.5s ease;
        }
        
        .progress-value {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 0.7rem;
            font-weight: bold;
        }
        
        .comparison {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
            margin-top: 3px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .stat-box {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary);
            margin: 0.5rem 0;
        }
        
        .stat-label {
            color: var(--secondary);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .pie-chart {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: conic-gradient(
                var(--primary) 0% 60%,
                var(--secondary) 60% 100%
            );
            margin: 0 auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .pie-chart::before {
            content: "60%";
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--dark);
        }
        
        .graph-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .graph-card {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .bar-graph {
            display: flex;
            height: 200px;
            align-items: flex-end;
            gap: 20px;
            padding-top: 20px;
        }
        
        .bar {
            flex: 1;
            background: linear-gradient(to top, var(--primary), var(--secondary));
            border-radius: 5px 5px 0 0;
            position: relative;
            min-width: 40px;
        }
        
        .bar-label {
            position: absolute;
            bottom: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0.8rem;
        }
        
        .bar-value {
            position: absolute;
            top: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-weight: bold;
        }
        
        .filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            padding: 8px 16px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-btn.active {
            background: var(--secondary);
            color: white;
            border-color: var(--secondary);
        }
        
        footer {
            text-align: center;
            padding: 2rem;
            background-color: var(--dark);
            color: white;
            margin-top: 3rem;
        }
        
        @media (max-width: 768px) {
            .stats-grid, .card-table, .graph-container {
                grid-template-columns: 1fr;
            }
            
            .bar-graph {
                flex-direction: column;
                height: auto;
                align-items: stretch;
            }
            
            .bar {
                height: 40px;
                border-radius: 0 5px 5px 0;
            }
            
            .bar-label {
                position: static;
                padding: 5px 0;
            }
            
            .bar-value {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                color: white;
            }
        }
    </style>
</head>
<body>
    <header class="athlete-header">
        <div class="athlete-photo"></div>
        <h1>JEAN DUPONT</h1>
        <p>Spécialiste des lancers | Club Athlétic Paris</p>
    </header>

    <div class="container">
        <?php
        // Données de progression (à remplacer par vos variables PHP)
        $progression = [
            'poids' => 85,
            'disque' => 78,
            'marteau' => 65,
            'annee' => 60
        ];
        
        // Données de performance
        $performances = [
            'poids' => [
                'meilleur' => 18.45,
                'saison_precedente' => 17.58,
                'record' => 18.72,
                'classement' => '3ème France'
            ],
            'disque' => [
                'meilleur' => 56.30,
                'saison_precedente' => 52.15,
                'record' => 56.30,
                'classement' => '5ème France'
            ],
            'marteau' => [
                'meilleur' => 62.18,
                'saison_precedente' => 60.37,
                'record' => 63.45,
                'classement' => '8ème France'
            ]
        ];
        
        // Historique des performances
        $historique = [
            '2021' => ['poids' => 17.20, 'disque' => 48.75, 'marteau' => 63.45],
            '2022' => ['poids' => 17.58, 'disque' => 52.15, 'marteau' => 60.37],
            '2023' => ['poids' => 18.45, 'disque' => 56.30, 'marteau' => 62.18]
        ];
        
        // Fonction pour calculer l'évolution
        function calculer_evolution($v1, $v2) {
            return round(($v2 - $v1) / $v1 * 100);
        }
        ?>

        <div class="filters">
            <button class="filter-btn active" data-filter="all">Toutes épreuves</button>
            <button class="filter-btn" data-filter="force">Force</button>
            <button class="filter-btn" data-filter="endurance">Endurance</button>
            <button class="filter-btn" data-filter="sprint">Sprint</button>
        </div>
        
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                STATISTIQUES PRINCIPALES
            </h2>
            
            <div class="stats-grid">
                <div class="stat-box">
                    <div class="stat-value"><?= $performances['poids']['meilleur'] ?>m</div>
                    <div class="stat-label">Lancer de poids</div>
                    <div>Record: <?= $performances['poids']['record'] ?>m</div>
                </div>
                
                <div class="stat-box">
                    <div class="stat-value"><?= $performances['disque']['meilleur'] ?>m</div>
                    <div class="stat-label">Lancer de disque</div>
                    <div>Top 5 France</div>
                </div>
                
                <div class="stat-box">
                    <div class="pie-chart" style="background: conic-gradient(
                        var(--primary) 0% <?= $progression['annee'] ?>%,
                        var(--secondary) <?= $progression['annee'] ?>% 100%
                    )?>">
                        <div style="position: absolute;"><?= $progression['annee'] ?>%</div>
                    </div>
                    <div class="stat-label">Objectif saison</div>
                </div>
            </div>
        </div>
        
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                PROGRESSION DES PERFORMANCES
            </h2>
            
            <table class="stats-table">
                <thead>
                    <tr>
                        <th>Épreuve</th>
                        <th>Performance</th>
                        <th>Progression</th>
                        <th>Classement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($performances as $epreuve => $data): ?>
                    <tr>
                        <td><strong>Lancer de <?= $epreuve ?></strong></td>
                        <td><?= $data['meilleur'] ?> m</td>
                        <td>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: <?= $progression[$epreuve] ?>%">
                                    <span class="progress-value">+<?= calculer_evolution($data['saison_precedente'], $data['meilleur']) ?>%</span>
                                </div>
                            </div>
                            <div class="comparison">
                                <span>Saison dernière: <?= $data['saison_precedente'] ?> m</span>
                                <span>Record: <?= $data['record'] ?> m</span>
                            </div>
                        </td>
                        <td><?= $data['classement'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                HISTORIQUE SUR 3 ANS
            </h2>
            
            <table class="minimal-table">
                <thead>
                    <tr>
                        <th>Épreuve</th>
                        <th>2021</th>
                        <th>2022</th>
                        <th>2023</th>
                        <th>Évolution</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($historique['2021'] as $epreuve => $v2021): ?>
                    <tr>
                        <td>Lancer de <?= $epreuve ?></td>
                        <td><?= $v2021 ?>m</td>
                        <td><?= $historique['2022'][$epreuve] ?>m</td>
                        <td><?= $historique['2023'][$epreuve] ?>m</td>
                        <td><?= calculer_evolution($v2021, $historique['2023'][$epreuve]) ?>%</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
  