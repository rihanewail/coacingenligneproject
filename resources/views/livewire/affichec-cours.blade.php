<!-- resources/views/livewire/affiche-cours.blade.php -->

<div>
    <h2>Your Courses</h2>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Type</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr>
                            <td>{{ $produit->nom }}</td>
                            <td>{{ $produit->type }}</td>
                            <td>{{ $produit->detaille }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $produits->links() }}
        </div>
</div>
