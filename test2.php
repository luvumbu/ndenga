<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Athlète - Performance Tracking</title>
    <style>
        :root {
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
        
        /* Style de tableau 1 : Classique moderne */
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
        
        /* Style de tableau 2 : Cartes */
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
        
        /* Style de tableau 3 : Minimaliste */
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
        
        /* Style de tableau 4 : Avec icônes */
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
        
        /* Style de tableau 5 : Alternance couleur */
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
            transition: transform 0.3s;
        }
        
        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
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
        
        /* Camembert CSS */
        .pie-chart {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: conic-gradient(
                var(--primary) 0% 60%,
                var(--secondary) 60% 90%,
                var(--accent) 90% 100%
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
        
        /* Graphiques CSS */
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
        
        /* Filtres */
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
        <div class="filters">
            <button class="filter-btn active" data-filter="all">Toutes épreuves</button>
            <button class="filter-btn" data-filter="force">Force</button>
            <button class="filter-btn" data-filter="endurance">Endurance</button>
            <button class="filter-btn" data-filter="sprint">Sprint</button>
        </div>
        
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                STATISTIQUES PRINCIPALES - SAISON 2023
            </h2>
            
            <div class="stats-grid">
                <div class="stat-box">
                    <div class="stat-value">18.45m</div>
                    <div class="stat-label">Lancer de poids</div>
                    <div>Record personnel</div>
                </div>
                
                <div class="stat-box">
                    <div class="stat-value">56.30m</div>
                    <div class="stat-label">Lancer de disque</div>
                    <div>Top 5 France</div>
                </div>
                
                <div class="stat-box">
                    <div class="pie-chart"></div>
                    <div class="stat-label">Objectif saison</div>
                    <div>Atteint: 3/5 records</div>
                </div>
            </div>
        </div>
        
        <!-- Tableau Style 1 : Classique moderne -->
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                PERFORMANCES DÉTAILLÉES (Style Classique)
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
                    <tr>
                        <td><strong>Lancer de poids</strong></td>
                        <td>18.45 m</td>
                        <td>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 85%">
                                    <span class="progress-value">+5%</span>
                                </div>
                            </div>
                            <div class="comparison">
                                <span>Saison dernière: 17.58 m</span>
                                <span>Record perso: 18.72 m</span>
                            </div>
                        </td>
                        <td>3ème France</td>
                    </tr>
                    <tr>
                        <td><strong>Lancer de disque</strong></td>
                        <td>56.30 m</td>
                        <td>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 78%">
                                    <span class="progress-value">+8%</span>
                                </div>
                            </div>
                            <div class="comparison">
                                <span>Saison dernière: 52.15 m</span>
                                <span>Record perso: 56.30 m</span>
                            </div>
                        </td>
                        <td>5ème France</td>
                    </tr>
                    <tr>
                        <td><strong>Lancer de marteau</strong></td>
                        <td>62.18 m</td>
                        <td>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 65%">
                                    <span class="progress-value">+3%</span>
                                </div>
                            </div>
                            <div class="comparison">
                                <span>Saison dernière: 60.37 m</span>
                                <span>Record perso: 63.45 m</span>
                            </div>
                        </td>
                        <td>8ème France</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Tableau Style 2 : Cartes -->
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                ANALYSE PAR ÉPREUVE (Style Cartes)
            </h2>
            
            <div class="card-table">
                <div class="performance-card">
                    <div class="card-header">
                        <h3>Lancer de poids</h3>
                        <span class="card-value">18.45m</span>
                    </div>
                    <p><strong>Progression:</strong> +5% vs saison dernière</p>
                    <p><strong>Record:</strong> 18.72m (2022)</p>
                    <p><strong>Classement:</strong> 3ème France</p>
                </div>
                
                <div class="performance-card">
                    <div class="card-header">
                        <h3>Lancer de disque</h3>
                        <span class="card-value">56.30m</span>
                    </div>
                    <p><strong>Progression:</strong> +8% vs saison dernière</p>
                    <p><strong>Record:</strong> 56.30m (2023)</p>
                    <p><strong>Classement:</strong> 5ème France</p>
                </div>
                
                <div class="performance-card">
                    <div class="card-header">
                        <h3>Lancer de marteau</h3>
                        <span class="card-value">62.18m</span>
                    </div>
                    <p><strong>Progression:</strong> +3% vs saison dernière</p>
                    <p><strong>Record:</strong> 63.45m (2021)</p>
                    <p><strong>Classement:</strong> 8ème France</p>
                </div>
            </div>
        </div>
        
        <!-- Tableau Style 3 : Minimaliste -->
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                COMPARAISON SAISONNIÈRE (Style Minimaliste)
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
                    <tr>
                        <td>Lancer de poids</td>
                        <td>17.20m</td>
                        <td>17.58m</td>
                        <td>18.45m</td>
                        <td>+7.3%</td>
                    </tr>
                    <tr>
                        <td>Lancer de disque</td>
                        <td>48.75m</td>
                        <td>52.15m</td>
                        <td>56.30m</td>
                        <td>+15.5%</td>
                    </tr>
                    <tr>
                        <td>Lancer de marteau</td>
                        <td>63.45m</td>
                        <td>60.37m</td>
                        <td>62.18m</td>
                        <td>-2.0%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Tableau Style 4 : Avec icônes -->
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                STATISTIQUES AVANCÉES (Style Icônes)
            </h2>
            
            <table class="stats-table icon-table">
                <thead>
                    <tr>
                        <th>Épreuve</th>
                        <th>Moyenne</th>
                        <th>Meilleur</th>
                        <th>Consistance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="icon"></span>
                            Poids
                        </td>
                        <td>17.89m</td>
                        <td>18.45m</td>
                        <td>96.8%</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="icon"></span>
                            Disque
                        </td>
                        <td>54.12m</td>
                        <td>56.30m</td>
                        <td>94.2%</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="icon"></span>
                            Marteau
                        </td>
                        <td>61.03m</td>
                        <td>62.18m</td>
                        <td>97.2%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Tableau Style 5 : Alternance couleur -->
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                COMPÉTITIONS RÉCENTES (Style Alternance)
            </h2>
            
            <table class="stats-table color-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Compétition</th>
                        <th>Épreuve</th>
                        <th>Résultat</th>
                        <th>Classement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15/06/2023</td>
                        <td>Championnats de France</td>
                        <td>Poids</td>
                        <td>18.45m</td>
                        <td>3ème</td>
                    </tr>
                    <tr>
                        <td>15/06/2023</td>
                        <td>Championnats de France</td>
                        <td>Disque</td>
                        <td>56.30m</td>
                        <td>5ème</td>
                    </tr>
                    <tr>
                        <td>10/06/2023</td>
                        <td>Meeting de Paris</td>
                        <td>Poids</td>
                        <td>18.12m</td>
                        <td>2ème</td>
                    </tr>
                    <tr>
                        <td>10/06/2023</td>
                        <td>Meeting de Paris</td>
                        <td>Marteau</td>
                        <td>62.18m</td>
                        <td>4ème</td>
                    </tr>
                    <tr>
                        <td>27/05/2023</td>
                        <td>Golden League</td>
                        <td>Disque</td>
                        <td>55.87m</td>
                        <td>6ème</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Section Graphiques -->
        <div class="stats-card">
            <h2 class="stats-title">
                <span class="icon"></span>
                ANALYSE VISUELLE
            </h2>
            
            <div class="graph-container">
                <div class="graph-card">
                    <h3>Progression annuelle - Lancer de poids</h3>
                    <div class="bar-graph">
                        <div class="bar" style="height: 30%">
                            <span class="bar-value">17.20m</span>
                            <span class="bar-label">2021</span>
                        </div>
                        <div class="bar" style="height: 50%">
                            <span class="bar-value">17.58m</span>
                            <span class="bar-label">2022</span>
                        </div>
                        <div class="bar" style="height: 85%">
                            <span class="bar-value">18.45m</span>
                            <span class="bar-label">2023</span>
                        </div>
                    </div>
                </div>
                
                <div class="graph-card">
                    <h3>Répartition des performances</h3>
                    <div class="pie-chart" style="background: conic-gradient(
                        var(--primary) 0% 40%,
                        var(--secondary) 40% 70%,
                        var(--accent) 70% 100%
                    );">
                        <div style="position: absolute; text-align: center;">
                            <div>Poids 40%</div>
                            <div>Disque 30%</div>
                            <div>Marteau 30%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2023 Dashboard Performance Athlète - Données mises à jour le 15/10/2023</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation des barres de progression
            const progressBars = document.querySelectorAll('.progress-bar');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
            
            // Filtres
            const filterBtns = document.querySelectorAll('.filter-btn');
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>